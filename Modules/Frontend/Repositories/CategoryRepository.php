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

    public function getDetailPageHeaderCategoriesByPosition($limit = 11)
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

    public function getFrontPageHeaderCategoriesByPosition($limit = 11)
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
}
