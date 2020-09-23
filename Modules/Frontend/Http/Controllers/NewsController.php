<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\Controller;
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


}
