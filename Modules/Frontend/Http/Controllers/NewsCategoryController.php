<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Modules\Backend\Http\Responses\Response;
use Modules\Backend\Repositories\NewsCategoryRepository;
use Modules\Frontend\Entities\NewsCategory;


class NewsCategoryController extends \Modules\Backend\Http\Controllers\NewsCategoryController
{

    protected $module = 'fronted';
    protected $viewPath = 'frontend::components.';
    protected $model;
    protected $repository;

    public function __construct(NewsCategory $newsCategory)
    {
        $this->model = $newsCategory;
        parent::__construct($newsCategory);
    }

    public function showNewsByCategory($slug)
    {

        $newsByCategory = $this->getNewsByCategorySlug($slug);
        $headerCategories = (new NewsCategoryRepository(new NewsCategory()))->getHeaderCategories();
        return new Response($this->viewPath . '.newsByCategory',
            [
                'newsByCategory' => $newsByCategory,
                'headerCategories' => $headerCategories
            ]);


    }

    protected function getNewsByCategorySlug($slug, $limit = 10)
    {
        return DB::table('news_categories')
            ->join('news_categories_pivot', 'news_categories.id',
                '=', 'news_categories_pivot.news_category_id')
            ->join('news', 'news_categories_pivot.news_id', '=', 'news.id')
            ->leftJoin('reporters', 'reporters.id', '=', 'news.reporter_id')
            ->leftJoin('guests', 'guests.id', '=', 'news.guest_id')
            ->select('news.sub_title', 'news.slug as news_slug', 'news.title', 'news.short_description',
                'news.description', 'news.publish_date',
                'news_categories.slug as category_slug', 'news_categories.name as category'
            )->selectRaw('IFNULL(reporters.name,guests.name) as author, IFNULL(news.reporter_id,news.guest_id) as author_type')
            ->where('news_categories.slug', $slug)
            ->limit($limit)
            ->get();
    }

}
