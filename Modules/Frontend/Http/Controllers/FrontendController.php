<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\News;
use Modules\Backend\Entities\NewsCategory;
use Modules\Backend\Repositories\NewsCategoryRepository;
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

    public function __construct()
    {
//     dd(NewsCategory::all());
        $this->newCategoryRepository = new NewsCategoryRepository(new NewsCategory());
        $this->newsRepository = new NewsRepository(new News());
//        $this->
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
//        dd('gg');
        $headerCategories = $this->newCategoryRepository->getHeaderCategories();
        $firstPositionNews = $this->newsRepository->getNewsByPosition(1, 8);
        $secondPositionNews = $this->newsRepository->getNewsByPosition(2, 5);
        return view('frontend::index', compact('headerCategories', 'firstPositionNews', 'secondPositionNews'));
    }

    public function getAllEditions()
    {
        return config('editions');
    }

    public function getCategoryByPosition(int $position)
    {
//        $this->getModel()
    }

}
