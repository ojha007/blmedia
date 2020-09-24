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
            ->select('news.title', 'news.description')
            ->join('news_categories_pivot', 'news_id', '=', 'news_category_id')
            ->join('news_categories', 'news_categories.id', 'news_categories_pivot.news_category_id')
            ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
            ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
            ->selectRaw('IFNULL(reporters.name,guests.name) as author_name')
            ->selectRaw('IF(reporters.name IS NOT  NULL,"reporters","guests") as author_type')
            ->selectRaw('IFNULL(reporters.slug,guests.slug) as author_slug')
            ->where('news_category_id', '=', $category_id)
            ->where('news.is_active', true)
            ->orderByDesc('news.id')
            ->limit($limit);

    }

    public function getNewsByPosition(int $position, int $limit)
    {

        return DB::table('news')
            ->select('news.title', 'news.sub_title', 'news.short_description',
                'categories.name as categories', 'news.id as news_slug',
                'categories.slug as category_slug', 'news.image',
                'news.image_description', 'news.image_alt')
            ->selectRaw('IFNULL(reporters.name,guests.name) as author_name')
            ->selectRaw('IF(reporters.name IS NOT  NULL,"reporters","guests") as author_type')
            ->selectRaw('IFNULL(reporters.slug,guests.slug) as author_slug')
            ->join('news_categories', 'news_categories.news_id', '=', 'news.id')
            ->join('categories', 'categories.id', '=', 'news_categories.category_id')
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
            ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
            ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
            ->where('category_positions.front_body_position', $position)
            ->orderBy('news.id', 'DESC')
            ->where('news.is_active', true)
            ->limit($limit)
            ->get();
    }

    public function getDetailNewsByPosition(int $position, int $limit)
    {

        return DB::table('news')
            ->select('news.title', 'news.sub_title', 'news.short_description', 'reporters.name as reporter_name',
                'guests.name as guest_name', 'categories.name as categories', 'news.id as news_slug',
                'categories.slug as category_slug', 'news.image', 'news.image_description', 'news.image_alt')
            ->selectRaw('IFNULL(reporters.name,guests.name) as author_name')
            ->selectRaw('IF(reporters.name IS NOT  NULL,"reporters","guests") as author_type')
            ->selectRaw('IFNULL(reporters.slug,guests.slug) as author_slug')
            ->join('news_categories', 'news_categories.news_id', '=', 'news.id')
            ->join('categories', 'categories.id', '=', 'news_categories.category_id')
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
            ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
            ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
            ->where('category_positions.detail_body_position', $position)
            ->where('news.is_active', true)
            ->limit($limit)
            ->get();
    }

    public function getCategoryDoesntExitsInDetailPage()
    {

        return DB::table('categories')
            ->select('categories.slug as category_slug')
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
//            ->whereNull('category_positions.detail_body_position')
//            ->whereNull('category_positions.front_body_position')
            ->limit(10)
            ->get()->pluck('slug');
    }


}
