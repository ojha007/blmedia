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

class NewsController extends Controller
{
    protected $module = 'fronted';

    protected $viewPath = 'frontend::components.';
    private $categoryRepository;
    /**
     * @var AdvertisementRepository
     */
    private $adsRepository;
    private $newsRepository;

    public function __construct()
    {
        $this->categoryRepository = new  CategoryRepository(new Category());
        $this->adsRepository = new AdvertisementRepository(new Advertisement());
        $this->newsRepository = new NewsRepository(new News());
    }

    public function showNews($slug)
    {
        $news = $this->getNews($slug);
        $category_slug = $news->category_name;
        $advertisements = $this->adsRepository->getAllAdvertisements('detail_page');
        $headerCategories = $this->categoryRepository->getHeaderCategories();
        $firstPositionNews = $this->newsRepository->getDetailNewsByPosition(1, 7);
        $secondPositionNews = $this->newsRepository->getDetailNewsByPosition(2, 7);
        $thirdPositionNews = $this->newsRepository->getDetailNewsByPosition(3, 7);
        if (count($category_slug) == 0) {
            $category_slug = $this->newsRepository->getCategoryDoesntExitsInDetailPage();
        }
        $sameCategoryNews = $this->categoryRepository->getSimilarNewsByCategorySlug($category_slug, 9);
        return view($this->viewPath . '.newsDetail',
            compact('news', 'headerCategories',
                'sameCategoryNews',
                'firstPositionNews', 'secondPositionNews', 'thirdPositionNews'
            ))
            ->with($advertisements);
    }

    protected function getNews($id)
    {
        return News::with('categories', 'reporter', 'guest')->find($id);
    }

    public function newsByAuthor($author_type, $author_slug)
    {

        $db = $author_type == 'reporters' ? 'reporters' : 'guests';
        $column = $db == 'reporters' ? 'reporter_id' : 'guest_id';
        $newsByAuthor = DB::table('news')
            ->select('news.title', 'news.sub_title', 'news.short_description',
                'categories.name as categories', 'news.id as news_slug', 'news.publish_date',
                'categories.slug as category_slug', 'news.id as image', 'news.id as image_description')
            ->addSelect($db . '.name as author_name')
            ->selectRaw('IF(news.guest_id,"guests","reporters") as author_type')
            ->selectRaw($db.'.slug as author_slug')
            ->join($db, 'news.' . $column, '=', $db . '.id')
            ->join('news_categories', 'news_categories.news_id', '=', 'news.id')
            ->join('categories', 'categories.id', '=', 'news_categories.category_id')
            ->where($db . '.slug', '=', $author_slug)
            ->paginate(15);
        $advertisements = $this->adsRepository->getAllAdvertisements('category_page');
        $headerCategories = $this->categoryRepository->getDetailPageHeaderCategoriesByPosition();
        $secondPositionNews = $this->newsRepository->getDetailNewsByPosition(2, 6);
        $firstPositionNews = $this->newsRepository->getDetailNewsByPosition(1, 6);
        $thirdPositionNews = $this->newsRepository->getDetailNewsByPosition(3, 6);
        return view($this->viewPath . '.newsByAuthor',
            compact('newsByAuthor',
                'headerCategories',
                'firstPositionNews',
                'secondPositionNews',
                'thirdPositionNews'
            ))
            ->with($advertisements);

    }


}
