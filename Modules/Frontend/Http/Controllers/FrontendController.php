<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Advertisement;
use Modules\Backend\Entities\CategoryPositions;
use Modules\Backend\Repositories\AdvertisementRepository;
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
    /**
     * @var AdvertisementRepository
     */
    private $adsRepository;

    public function __construct()
    {
        $this->categoryRepository = new CategoryRepository(new Category());
        $this->newsRepository = new NewsRepository();
        $this->adsRepository = new AdvertisementRepository(new Advertisement());
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $newsRepo = $this->newsRepository;
        $headerCategories = $this->categoryRepository->getFrontPageHeaderCategoriesByPosition();
        $advertisements = $this->adsRepository->getAllAdvertisements('main_page');
        $anchorNews = $newsRepo->getCacheNewsByExtraColumn('is_anchor', 5);
        $blSpecialNews = $newsRepo->getCacheNewsByExtraColumn('is_special', 5);
        $firstPositionNews = $newsRepo->getCacheNews(1, CategoryPositions::FRONT_BODY_POSITION, 9, 'firstPositionNews');
        $fourthPositionNews = $newsRepo->getCacheNews(4, CategoryPositions::FRONT_BODY_POSITION, 5, 'fourthPositionNews');
        $fifthPositionNews = $newsRepo->getCacheNews(5, CategoryPositions::FRONT_BODY_POSITION, 5, 'fifthPositionNews');
        $sixthPositionNews = $newsRepo->getCacheNews(6, CategoryPositions::FRONT_BODY_POSITION, 10, 'sixthPositionNews');
        $seventhPositionNews = $newsRepo->getCacheNews(7, CategoryPositions::FRONT_BODY_POSITION, 6, 'seventhPositionNews');
        $eighthPositionNews = $newsRepo->getCacheNews(8, CategoryPositions::FRONT_BODY_POSITION, 9, 'eighthPositionNews');
        $ninthPositionNews = $newsRepo->getCacheNews(9, CategoryPositions::FRONT_BODY_POSITION, 6, 'ninthPositionNews');
        $tenthPositionNews = $newsRepo->getCacheNews(10, CategoryPositions::FRONT_BODY_POSITION, 6, 'tenthPositionNews');
        $eleventhPositionNews = $newsRepo->getCacheNews(11, CategoryPositions::FRONT_BODY_POSITION, 5, 'eleventhPositionNews');
        $twelvePositionNews = $newsRepo->getCacheNews(12, CategoryPositions::FRONT_BODY_POSITION, 5, 'twelvePositionNews');
        $thirteenPositionNews = $newsRepo->getCacheNews(13, CategoryPositions::FRONT_BODY_POSITION, 4, 'thirteenPositionNews');
        $fourteenPositionNews = $newsRepo->getCacheNews(14, CategoryPositions::FRONT_BODY_POSITION, 6, 'fourteenPositionNews');
        $fifteenPositionNews = $newsRepo->getCacheNews(15, CategoryPositions::FRONT_BODY_POSITION, 9, 'fifteenPositionNews');
        return view('frontend::index', compact(
            'headerCategories',
            'firstPositionNews',
            'fourthPositionNews',
            'anchorNews',
            'blSpecialNews',
            'fifthPositionNews',
            'sixthPositionNews',
            'seventhPositionNews',
            'eighthPositionNews',
            'ninthPositionNews',
            'tenthPositionNews',
            'eleventhPositionNews',
            'twelvePositionNews',
            'fourthPositionNews',
            'thirteenPositionNews',
            'fifteenPositionNews',
            'fourteenPositionNews'))
            ->with($advertisements);

    }


    public function getAllEditions()
    {
        return config('editions');
    }

    public function videos()
    {
        $headerCategories = $this->categoryRepository->getFrontPageHeaderCategoriesByPosition();
        $advertisements = $this->adsRepository->getAllAdvertisements('main_page');
        $fourthPositionNews = $this->newsRepository->getNewsByPosition(4, 9);
        return view('frontend::components.videos.videos', compact('headerCategories', 'fourthPositionNews'))->with($advertisements);
    }


    public function preetiToUniCode()
    {
        return view('frontend::unicode.preeti-to-unicode');
    }

    public function unicodeToPreeti()
    {
        return view('frontend::unicode.unicode-to-preeti');
    }

    public function romanToUnicode()
    {
        return view('frontend::unicode.roman-to-nepali');
    }

}
