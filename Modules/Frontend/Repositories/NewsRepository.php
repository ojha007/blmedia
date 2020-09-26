<?php


namespace Modules\Frontend\Repositories;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class NewsRepository extends \Modules\Backend\Repositories\NewsRepository
{
    protected $module = 'fronted';
    protected $model;


    public function getNewsByCategory($category_id, $limit)
    {

        try {
            return DB::table('news')
//                ->selectRaw(DB::raw('SELECT distinct(news.id)'))
                ->select('news.title', 'news.description', 'guests.name as guest_name', 'reporters.name as reporter_name', 'news.id', 'categories.is_video')
                ->join('news_categories_pivot', 'news_id', '=', 'news_category_id')
                ->join('news_categories', 'news_categories.id', 'news_categories_pivot.news_category_id')
                ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
                ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
                ->where('news_category_id', '=', $category_id)
                ->where('news.is_active', true)
                ->orderByDesc('news.id')
                ->whereNull('news.deleted_at')
                ->limit($limit);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage() . '-' . $exception->getTraceAsString());
            return redirect()->route('/');
        }


    }

    public function getNewsByPosition(int $position, int $limit)
    {

        return DB::table('news')
            ->select('news.title', 'news.sub_title', 'news.short_description',
                'categories.name as categories', 'news.id as news_slug', 'news.publish_date',
                'categories.slug as category_slug', 'news.image',
                'reporters.image as reporter_image', 'guests.image as guest_image',
                'news.image_description', 'news.image_alt', 'categories.is_video')
            ->selectRaw('IFNULL(reporters.name,guests.name) as author_name')
            ->selectRaw('IF(reporters.name IS NOT  NULL,"reporters","guests") as author_type')
            ->selectRaw('IFNULL(reporters.slug,guests.slug) as author_slug')
            ->join('news_categories', 'news_categories.news_id', '=', 'news.id')
            ->join('categories', 'categories.id', '=', 'news_categories.category_id')
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
            ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
            ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
            ->where('category_positions.front_body_position', $position)
            ->orderByDesc('news.id')
            ->where('news.is_active', true)
            ->whereNull('news.deleted_at')
//            ->distinct()
            ->limit($limit)
            ->get();
    }

    public function getDetailNewsByPosition(int $position, int $limit)
    {

        return DB::table('news')
            ->select('news.title', 'news.sub_title', 'news.short_description',
                'categories.name as categories', 'news.id as news_slug', 'news.publish_date',
                'categories.slug as category_slug', 'news.image',
                'reporters.image as reporter_image', 'guests.image as guest_image',
                'news.image_description', 'news.image_alt', 'categories.is_video')
            ->selectRaw('IFNULL(reporters.name,guests.name) as author_name')
            ->selectRaw('IFNULL(reporters.slug,guests.slug) as author_slug')
            ->selectRaw('IF(reporters.name IS NOT  NULL,"reporters","guests") as author_type')
            ->join('news_categories', 'news_categories.news_id', '=', 'news.id')
            ->join('categories', 'categories.id', '=', 'news_categories.category_id')
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
            ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
            ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
            ->where('category_positions.detail_body_position', $position)
            ->orderByDesc('news.id')
            ->where('news.is_active', true)
            ->whereNull('news.deleted_at')
//            ->distinct()
            ->limit($limit)
            ->get();
    }

    public function getCategoryDoesntExitsInDetailPage()
    {

        return DB::table('categories')
            ->select('categories.slug as category_slug', 'categories.is_video')
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
            ->whereNull('category_positions.detail_body_position')
            ->whereNull('category_positions.front_body_position')
            ->where('is_active', true)
            ->limit(10)
            ->get()
            ->pluck('slug');
    }


    public function getNewsByExtraColumn(int $position, int $limit, $extra_column)
    {
        $category = $extra_column == 'is_anchor' ? 'anchor' : 'blspecial-37-25-38';
        return DB::table('news')
//            ->selectRaw('SELECT distinct(news.id)')
            ->select('news.title', 'news.sub_title', 'news.short_description',
                'categories.name as categories', 'news.slug as news_slug', 'news.publish_date',
                'categories.slug as category_slug', 'news.image',
                'news.image_description', 'news.image_alt', 'categories.is_video')
            ->selectRaw('IFNULL(reporters.name,guests.name) as author_name')
            ->selectRaw('IF(reporters.name IS NOT  NULL,"reporters","guests") as author_type')
            ->selectRaw('IFNULL(reporters.slug,guests.slug) as author_slug')
            ->join('news_categories', 'news_categories.news_id', '=', 'news.id')
            ->join('categories', 'categories.id', '=', 'news_categories.category_id')
            ->where('categories.slug', '=', $category)
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
            ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
            ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
            ->where('category_positions.front_body_position', $position)
            ->where('news.' . $extra_column, '=', 1)
            ->orderByDesc('news.id')
            ->where('news.is_active', true)
            ->whereNull('news.deleted_at')
            ->limit($limit)
            ->get();
    }


}
