<?php


namespace Modules\Frontend\Repositories;


use App\Repositories\Repository;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Backend\Entities\CategoryPositions;
use Modules\Frontend\Entities\Category;

class NewsRepository extends Repository
{
    protected $module = 'fronted';
    protected $model;
    /**
     * @var CategoryRepository
     */
    private $categoryRepo;

    public function __construct()
    {
        $this->categoryRepo = new CategoryRepository(new Category());
    }

    public function getNewsByCategory($category_id, $limit)
    {

        try {
            return DB::table('news')
                ->selectRaw(DB::raw('SELECT distinct(news.id)'))
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
            ->selectRaw('SELECT DISTINCT (news.slug) ')
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
            ->selectRaw('SELECT DISTINCT news.id')
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
            ->distinct(true)
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

    public function getDetailPageCommonData()
    {
        $headerCategories = $this->categoryRepo->getDetailPageHeaderCategoriesByPosition();
        $blSpecialNews = $this->getCacheNewsByExtraColumn('is_special', 5);
        $detailPageSecondPositionNews = $this->getCacheNews(2, CategoryPositions::DETAIL_BODY_POSITION, 5, 'detailPageSecondPositionNews');
        $detailPageThirdPositionNews = $this->getCacheNews(3, CategoryPositions::DETAIL_BODY_POSITION, 5, 'detailPageThirdPositionNews');
        return [
            'headerCategories' => $headerCategories,
            'blSpecialNews' => $blSpecialNews,
            'detailPageSecondPositionNews' => $detailPageSecondPositionNews,
            'detailPageThirdPositionNews' => $detailPageThirdPositionNews
        ];
    }

    public function getCacheNewsByExtraColumn($column, $limit)
    {
        $category = $column == 'is_special' ? trans('messages.bl_special') : trans('messages.anchor');
        $category_slug = $column == 'is_special' ? 'bl_special' : 'anchor';
        return Cache::remember($column . '_news', 45500, function () use ($column, $limit, $category, $category_slug) {
            return DB::table('news')
                ->select('news.title', 'news.slug as news_slug', 'news.image as image', 'news.' . $column,
                    'news.publish_date', 'news.short_description', 'news.sub_title', 'news.image_alt', 'news.image_description')
                ->selectRaw('IFNULL(reporters.name,guests.name) as author_name')
                ->selectRaw('IF(reporters.name IS NOT  NULL,"reporters","guests") as author_type')
                ->selectRaw("'$category' as categories")
                ->selectRaw("'$category_slug' as category_slug")
                ->selectRaw('IFNULL(reporters.slug,guests.slug) as author_slug')
                ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
                ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
                ->where('news.is_active', true)
                ->where('news.' . $column, '=', 1)
                ->orderByDesc('news.publish_date')
                ->limit($limit)
                ->get();
        });
    }

    public function getCacheNews(int $position, $placement, $limit, $cacheName)
    {
        return Cache::remember('_' . $cacheName, 4800, function () use ($position, $placement, $limit) {
            return $this->getNewsByPositionAndPlacement($position, $placement, $limit);
        });

    }

    public function getNewsByPositionAndPlacement(int $position, $placement, int $limit)
    {
        $category = DB::table('categories')
            ->select('categories.id')
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
            ->where('category_positions.' . $placement, '=', $position)
            ->first();
        if ($category)
            return DB::table('news')
                ->select('news.title', 'news.sub_title', 'news.short_description', 'reporters.name as reporter_name',
                    'guests.name as guest_name', 'categories.name as categories', 'news.id as news_slug',
                    'reporters.image as reporter_image', 'guests.image as guest_image',
                    'news.publish_date', 'categories.is_video',
                    'categories.slug as category_slug', 'news.image', 'news.image_description', 'news.image_alt')
                ->selectRaw('IFNULL(guests.name,reporters.name) as author_name')
                ->selectRaw('IF(news.guest_id IS NOT NULL,"guests","reporters") as author_type')
                ->selectRaw('IFNULL(guests.slug,reporters.slug) as author_slug')
                ->join('news_categories', 'news_categories.news_id', '=', 'news.id')
                ->join('categories', 'categories.id', '=', 'news_categories.category_id')
                ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
                ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
                ->where('news.is_active', true)
                ->whereNull('news.deleted_at')
                ->where('categories.id', '=', $category->id)
                ->orderByDesc('news.id')
                ->distinct(true)
                ->limit($limit)
                ->get();
        return [];
    }
}
