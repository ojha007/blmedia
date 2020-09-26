<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Entities\Advertisement;
use Modules\Backend\Entities\News;
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
        $advertisements = $this->adsRepository->getAllAdvertisements('category_page');
        $firstPositionNews = $this->newsRepository->getDetailNewsByPosition(1, 6);
        $secondPositionNews = $this->newsRepository->getDetailNewsByPosition(2, 6);
        $thirdPositionNews = $this->newsRepository->getDetailNewsByPosition(3, 6);
        $breadcrumbs = $this->repository->getChildCategory($slug, 7);
        $childCategoriesNews = $this->getChildCategoryNews($slug, 5);
        return view($this->viewPath . '.newsByCategory',
            compact('newsByCategory', 'breadcrumbs',
                'childCategoriesNews',
                'headerCategories',
                'ads_aside_logo',
                'firstPositionNews', 'secondPositionNews', 'thirdPositionNews'
            ))
            ->with($advertisements);
    }

    public function getNewsByCategorySlug($slug, $perPage = 15)
    {
        return DB::table('categories')
            ->join('news_categories', 'categories.id', '=', 'news_categories.category_id')
            ->join('news', 'news_categories.news_id', '=', 'news.id')
            ->leftJoin('reporters', 'reporters.id', '=', 'news.reporter_id')
            ->leftJoin('guests', 'guests.id', '=', 'news.guest_id')
            ->select('news.sub_title', 'news.slug as news_slug', 'news.title', 'news.short_description',
                'news.description', 'news.publish_date', 'news.image', 'news.image_alt', 'news.image_description',
                'categories.slug as category_slug', 'categories.name as categories'
            )->selectRaw('IFNULL(reporters.name,guests.name) as author_name')
            ->selectRaw('IF(reporters.name IS NOT  NULL,"reporters","guests") as author_type')
            ->selectRaw('IFNULL(reporters.slug,guests.slug) as author_slug')
            ->where('categories.slug', $slug)
            ->where('news.is_active', '=', 1)
            ->orderByDesc('news.id')
            ->paginate($perPage);

    }

    public function getChildCategoryNews($slug, $limit)
    {
        $category = DB::table('categories as c1')
            ->join('categories as c2', 'c2.parent_id', '=', 'c1.id')
            ->select('c2.id as c2_id', 'c2.name as name', 'c2.slug as slug')
            ->where('c1.slug', $slug)
            ->where('c2.is_active', true);

        return DB::table('news')
            ->join('news_categories', 'news.id', '=', 'news_categories.news_id')
            ->joinSub($category, 'cat', function ($query) {
                $query->on('news_categories.category_id', '=', 'cat.c2_id')
                    ->groupBy('cat.cat2_id');
            })
            ->selectRaw('IFNULL(reporters.name,guests.name) as author_name')
            ->selectRaw('IF(reporters.name IS NOT  NULL,"reporters","guests") as author_type')
            ->selectRaw('IFNULL(reporters.slug,guests.slug) as author_slug')
            ->leftJoin('reporters', 'reporters.id', '=', 'news.reporter_id')
            ->leftJoin('guests', 'guests.id', '=', 'news.guest_id')
            ->select('news.sub_title', 'news.slug as news_slug', 'news.title',
                'news.short_description',
                'news.description', 'news.publish_date',
                'news.image', 'news.image_alt', 'news.image_description',
                'cat.slug as category_slug', 'cat.name as category', 'cat.c2_id'
            )->selectRaw('IFNULL(reporters.name,guests.name) as author, IF(news.reporter_id,1,2) as author_type')
            ->get()
            ->groupBy('c2_id')
            ->map(function ($news) use ($limit) {
                return $news->take($limit);
            });

    }

}
