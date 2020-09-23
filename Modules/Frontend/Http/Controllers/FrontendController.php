<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Entities\Advertisement;
use Modules\Backend\Entities\News;
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
        $this->newsRepository = new NewsRepository(new News());
        $this->adsRepository = new AdvertisementRepository(new Advertisement());
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $headerCategories = $this->categoryRepository->getFrontPageHeaderCategoriesByPosition();
        $advertisements = $this->adsRepository->getAllAdvertisements('main_page');
        $firstPositionNews = $this->newsRepository->getNewsByPosition(1, 9);
        $secondPositionNews = $this->newsRepository->getNewsByPosition(2, 5);
        $thirdPositionNews = $this->newsRepository->getNewsByPosition(3, 8);
        $fourthPositionNews = $this->newsRepository->getNewsByPosition(4, 6);
        $fifthPositionNews = $this->newsRepository->getNewsByPosition(5, 5);
        $sixthPositionNews = $this->newsRepository->getNewsByPosition(6, 10);
        $seventhPositionNews = $this->newsRepository->getNewsByPosition(7, 6);
        $eighthPositionNews = $this->newsRepository->getNewsByPosition(8, 9);
        $ninthPositionNews = $this->newsRepository->getNewsByPosition(9, 6);
        $tenthPositionNews = $this->newsRepository->getNewsByPosition(10, 6);
        $eleventhPositionNews = $this->newsRepository->getNewsByPosition(11, 5);
        $twelvePositionNews = $this->newsRepository->getNewsByPosition(12, 5);
        $thirteenPositionNews = $this->newsRepository->getNewsByPosition(13, 4);
        $fourteenPositionNews = $this->newsRepository->getNewsByPosition(14, 6);
        return view('frontend::index', compact(
            'headerCategories',
            'firstPositionNews',
            'secondPositionNews',
            'thirdPositionNews',
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
            'fourteenPositionNews'))
            ->with($advertisements);

    }

    public function getAllActiveAdvertisements()
    {
        $selectAdsFor = $this->adsRepository->ads_page();
        $selectAdsSubFor = $this->adsRepository->ads_Positions();
        $placements = $this->adsRepository->adsPlacements();
        $toArray = [];
        $limit = 2;
        foreach ($selectAdsFor as $f => $for) {
            foreach ($selectAdsSubFor as $s => $sub_for) {
                foreach ($placements as $p => $placement) {
                    $toArray['ads_' . $f . '_' . $s . '_' . $p] = $this->adsRepository->getAdsByForAndSubForAndPlacement($f, $s, $p, $limit);
                }
            }
        }
        return array_filter($toArray);
    }

    public function getAllEditions()
    {
        return config('editions');
    }


//    public function subCategory()
//    {
//        $headerCategories = $this->categoryRepository->getFrontPageHeaderCategoriesByPosition();
//        $ads_above_top_menu = $this->adsRepository->getAdsByForAndSubForAndPlacement('main_page', 'top_menu', 'above', 2);
//        $ads_below_top_menu = $this->adsRepository->getAdsByForAndSubForAndPlacement('main_page', 'top_menu', 'below', 2);
//        $ads_aside_logo = $this->adsRepository->getAdsByForAndSubForAndPlacement('main_page', 'top_menu', 'aside', 1);
//        $firstPositionNews = $this->newsRepository->getNewsByPosition(1, 9);
//        $secondPositionNews = $this->newsRepository->getNewsByPosition(2, 5);
//        $thirdPositionNews = $this->newsRepository->getNewsByPosition(3, 8);
//        return view('frontend::components.subCategory', compact(
//            'headerCategories', 'firstPositionNews', 'secondPositionNews', 'thirdPositionNews',
//            'ads_above_top_menu', 'ads_below_top_menu',
//            'ads_aside_logo'));
//    }




}
