<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Entities\Advertisement;
use Modules\Backend\Repositories\AdvertisementRepository;
use Modules\Frontend\Entities\Category;
use Modules\Frontend\Repositories\CategoryRepository;

class NewsController extends Controller
{
    protected $module = 'fronted';

    protected $viewPath = 'frontend::components.';
    private $categoryRepository;
    /**
     * @var AdvertisementRepository
     */
    private $adsRepository;

    public function __construct()
    {
        $this->categoryRepository = new  CategoryRepository(new Category());
        $this->adsRepository = new AdvertisementRepository(new Advertisement());
    }

    public function showNews($slug)
    {
        $news = $this->getNews($slug);
        $ads_above_top_menu = $this->adsRepository->getAdsByForAndSubForAndPlacement('main_page', 'top_menu', 'above', 2);
        $ads_below_top_menu = $this->adsRepository->getAdsByForAndSubForAndPlacement('main_page', 'top_menu', 'below', 2);
        $ads_aside_logo = $this->adsRepository->getAdsByForAndSubForAndPlacement('main_page', 'top_menu', 'aside', 1);

        $headerCategories = $this->categoryRepository->getHeaderCategories();
        return view($this->viewPath . '.newsDetail',
            compact('news', 'headerCategories', 'ads_above_top_menu', 'ads_aside_logo', 'ads_below_top_menu'));
//        return new Response($this->viewPath . '.newsDetail',
//            [
//                'news' => $news,
//                'headerCategories' => $headerCategories
//            ]);

    }

    protected function getNews($id)
    {
        return DB::table('news')
            ->where('id', $id)
            ->select('news.title', 'news.sub_title', 'news.description')
            ->first();
    }

}
