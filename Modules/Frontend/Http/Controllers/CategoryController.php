<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Entities\Advertisement;
use Modules\Backend\Entities\News;
use Modules\Backend\Http\Responses\Response;
use Modules\Backend\Repositories\AdvertisementRepository;
use Modules\Frontend\Entities\Category;
use Modules\Frontend\Repositories\CategoryRepository;
use Modules\Frontend\Repositories\NewsRepository;


class CategoryController extends Controller
{

    /**
     * @var string
     */
    protected $module = 'fronted';
    /**
     * @var string
     */
    protected $viewPath = 'frontend::components.';
    /**
     * @var Category
     */
    protected $model;
    /**
     * @var CategoryRepository
     */
    protected $repository;
    /**
     * @var AdvertisementRepository
     */
    private $adsRepository;
    private $newsRepository;

    public function __construct(Category $category)
    {
        $this->model = $category;
        $this->repository = new CategoryRepository($category);
        $this->adsRepository = new AdvertisementRepository(new Advertisement());
        $this->newsRepository = new NewsRepository(new News());
    }

    public function showNewsByCategory($slug)
    {

        $newsByCategory = $this->getNewsByCategorySlug($slug);
        $headerCategories = $this->repository->getDetailPageHeaderCategoriesByPosition();
        $ads_above_top_menu = $this->adsRepository->getAdsByForAndSubForAndPlacement('main_page', 'top_menu', 'above', 2);
        $ads_below_top_menu = $this->adsRepository->getAdsByForAndSubForAndPlacement('main_page', 'top_menu', 'below', 2);
        $ads_aside_logo = $this->adsRepository->getAdsByForAndSubForAndPlacement('main_page', 'top_menu', 'aside', 1);
        $firstPositionNews = $this->newsRepository->getDetailNewsByPosition(1, 6);
        $secondPositionNews = $this->newsRepository->getDetailNewsByPosition(2, 6);
        $thirdPositionNews = $this->newsRepository->getDetailNewsByPosition(3, 6);
        $breadcrumbs = $this->repository->getChildCategory($slug, 7);
        return view($this->viewPath . '.newsByCategory',
            compact('newsByCategory', 'breadcrumbs', 'headerCategories', 'ads_above_top_menu', 'ads_aside_logo', 'ads_below_top_menu',
                'firstPositionNews', 'secondPositionNews', 'thirdPositionNews'
            ));
    }

    public function getNewsByCategorySlug($slug, $perPage = 10)
    {
        return DB::table('categories')
            ->join('news_categories', 'categories.id', '=', 'news_categories.category_id')
            ->join('news', 'news_categories.news_id', '=', 'news.id')
            ->leftJoin('reporters', 'reporters.id', '=', 'news.reporter_id')
            ->leftJoin('guests', 'guests.id', '=', 'news.guest_id')
            ->select('news.sub_title', 'news.slug as news_slug', 'news.title', 'news.short_description',
                'news.description', 'news.publish_date',
                'categories.slug as category_slug', 'categories.name as category'
            )->selectRaw('IFNULL(reporters.name,guests.name) as author, IFNULL(news.reporter_id,news.guest_id) as author_type')
            ->where('categories.slug', $slug)
            ->paginate($perPage);
    }

}
