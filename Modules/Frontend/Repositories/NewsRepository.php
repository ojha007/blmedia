<?php


namespace Modules\Frontend\Repositories;


use Illuminate\Support\Facades\DB;

class NewsRepository extends \Modules\Backend\Repositories\NewsRepository
{
    protected $module = 'fronted';
    protected $model;


    public function getNewsByCategory($category_id, $limit)
    {
        return DB::table('news')
            ->select('news.title', 'news.description', 'guests.name as guest_name', 'reporters.name as reporter_name')
            ->join('news_categories_pivot', 'news_id', '=', 'news_category_id')
            ->join('news_categories', 'news_categories.id', 'news_categories_pivot.news_category_id')
            ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
            ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
            ->where('news_category_id', '=', $category_id)
            ->orderBy('news.created_at', 'DESC')
            ->limit($limit);

    }

    public function getNewsByPosition(int $position, int $limit)
    {

        return $this->getModel()
            ->select('news.title', 'news.slug', 'news.sub_title', 'reporters.name as reporter_name',
                'guests.name as guest_name', 'news_categories.name as categories',
                'news_categories.slug as category_slug', 'news.id as image')
            ->join('news_categories_pivot', 'news_categories_pivot.news_id', '=', 'news.id')
            ->join('news_categories', 'news_categories.id', '=', 'news_categories_pivot.news_category_id')
            ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
            ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
            ->where('news_categories.in_body', true)
            ->where('news_categories.body_position', $position)
            ->limit($limit)
            ->get();
    }


}
