<?php


namespace Modules\Frontend\Repositories;


use App\Repositories\Repository;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Entities\Category;

class CategoryRepository extends Repository
{
    /**
     * @var Category
     */
    private $category;

    /**
     * CategoryRepository constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    public function getHeaderCategories()
    {

        return $this->getDetailPageHeaderCategoriesByPosition();

    }

    public function getDetailPageHeaderCategoriesByPosition($limit = 10)
    {
        return DB::table('categories')
            ->select('categories.name', 'categories.slug')
            ->where('parent_id', null)
            ->where('is_active', true)
            ->whereNull('categories.deleted_at')
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
            ->orderBy('category_positions.detail_header_position', 'ASC')
            ->whereNotNull('category_positions.detail_header_position')
            ->limit($limit)
            ->get();
    }

    public function getFrontPageHeaderCategoriesByPosition($limit = 10)
    {
        return DB::table('categories')
            ->select('categories.name', 'categories.slug')
            ->where('parent_id', null)
            ->where('is_active', true)
            ->join('category_positions', 'categories.id', '=', 'category_positions.category_id')
            ->orderBy('category_positions.front_header_position', 'ASC')
            ->whereNotNull('category_positions.front_header_position')
            ->limit($limit)
            ->get();

    }

    public function getChildCategory($slug, int $limit)
    {
        return DB::table('categories as c1')
            ->select('c2.name', 'c2.slug')
            ->join('categories as c2', 'c1.id', '=', 'c2.parent_id')
            ->whereNotNull('c2.parent_id')
            ->where('c2.is_active', true)
            ->whereNull('c2.deleted_at')
            ->where('c1.slug', '=', $slug)
            ->limit($limit)
            ->get();
    }

    public function getSimilarNewsByCategorySlug($slug, $limit)
    {

        $slug = is_array($slug) ? $slug : [$slug];
        return DB::table('news')
            ->select('news.title', 'news.description',
                'news.slug as news_slug', 'news.publish_date', 'news.image', 'news.image_description', 'news.image_alt')
            ->join('news_categories', 'news_categories.news_id', 'news.id')
            ->join('categories', 'categories.id', 'news_categories.category_id')
            ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
            ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
            ->selectRaw('IFNULL(reporters.name,guests.name) as author_name')
            ->selectRaw('IF(reporters.name IS NOT  NULL,"reporters","guests") as author_type')
            ->selectRaw('IFNULL(reporters.slug,guests.slug) as author_slug')
            ->whereIn('categories.slug', $slug)
            ->orderBy('news.created_at', 'DESC')
            ->limit($limit)
            ->get();
    }

    public function getCategorySlugByPosition($column, $position): string
    {
        $a = DB::table('categories as c')
            ->join('category_positions as cp', 'c.id', '=', 'cp.category_id')
            ->where($column, $position)
            ->first();
        if ($a) return $a->slug;
        return '';
    }
}
