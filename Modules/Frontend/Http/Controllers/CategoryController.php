<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Http\Responses\Response;
use Modules\Frontend\Entities\Category;
use Modules\Frontend\Repositories\CategoryRepository;


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

    public function __construct(Category $category)
    {
        $this->model = $category;
        $this->repository = new CategoryRepository($category);
    }

    public function showNewsByCategory($slug)
    {

        $newsByCategory = $this->getNewsByCategorySlug($slug);
        $headerCategories = $this->repository->getDetailPageHeaderCategoriesByPosition();
//        dd($headerCategories);
        return new Response($this->viewPath . '.newsByCategory',
            [
                'newsByCategory' => $newsByCategory,
                'headerCategories' => $headerCategories
            ]);


    }

    protected function getNewsByCategorySlug($slug, $perPage = 10)
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
