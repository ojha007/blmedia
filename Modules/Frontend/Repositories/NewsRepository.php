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

        return DB::table('news')
            ->select('news.title', 'news.sub_title', 'news.short_description', 'reporters.name as reporter_name',
                'guests.name as guest_name', 'categories.name as categories','news.id as slug',
                'categories.slug as category_slug', 'news.id as image', 'news.id as image_description')
            ->join('news_categories', 'news_categories.news_id', '=', 'news.id')
            ->join('categories', 'categories.id', '=', 'news_categories.category_id')
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
            ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
            ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
            ->where('category_positions.front_body_position', $position)
            ->limit($limit)
            ->get();
    }


}
