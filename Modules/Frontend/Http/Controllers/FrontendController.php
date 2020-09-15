<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\News;
use Modules\Backend\Repositories\NewsCategoryRepository;
use Modules\Frontend\Entities\Category;
use Modules\Frontend\Repositories\CategoryRepository;
use Modules\Frontend\Repositories\NewsRepository;

class FrontendController extends Controller
{

    /**
     * @var NewsCategoryRepository
     */
    private $newCategoryRepository;
    /**
     * @var NewsRepository
     */
    private $newsRepository;
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    public function __construct()
    {
        $this->categoryRepository = new CategoryRepository(new Category());
        $this->newsRepository = new NewsRepository(new News());
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $headerCategories = $this->categoryRepository->getFrontPageHeaderCategoriesByPosition();
        $firstPositionNews = $this->newsRepository->getNewsByPosition(1, 8);
        $secondPositionNews = $this->newsRepository->getNewsByPosition(2, 5);
        $thirdPositionNews = $this->newsRepository->getNewsByPosition(3, 7);
        $fifthPositionNews = $this->newsRepository->getNewsByPosition(5, 3);
        $sixthPositionNews = $this->newsRepository->getNewsByPosition(6, 10);
        $seventhPositionNews = $this->newsRepository->getNewsByPosition(7, 5);
        $eighthPositionNews = $this->newsRepository->getNewsByPosition(8, 5);
        $ninthPositionNews = $this->newsRepository->getNewsByPosition(9, 5);
        $tenthPositionNews = $this->newsRepository->getNewsByPosition(10, 6);
        $eleventhPositionNews = $this->newsRepository->getNewsByPosition(11, 5);
        $twelvePositionNews = $this->newsRepository->getNewsByPosition(12, 5);
        $thirteenPositionNews = $this->newsRepository->getNewsByPosition(13, 5);
        return view('frontend::index', compact('headerCategories',
            'firstPositionNews', 'secondPositionNews', 'thirdPositionNews',
            'fifthPositionNews', 'sixthPositionNews', 'seventhPositionNews', 'eighthPositionNews',
            'ninthPositionNews', 'tenthPositionNews', 'eleventhPositionNews', 'twelvePositionNews',
            'thirteenPositionNews'));
    }

    public function getAllEditions()
    {
        return config('editions');
    }

    public function getCategoryByPosition(int $position)
    {

    }

    public function singlePage()
    {
        return view('frontend::components.single-page');
    }

    public function detailPage()
    {
        return view('frontend::components.detail-page');
    }

}
