<?php


namespace Modules\Backend\Repositories;


use App\Repositories\Repository;
use Modules\Backend\Entities\NewsCategory;

class NewsCategoryRepository extends Repository
{
    public function __construct(NewsCategory $newsCategory)
    {
        $this->model = $newsCategory;
    }

    public function getViewData()
    {
        $selectCategoryCodes = NewsCategory::selectCategoryCode();
        $selectParentCategories = $this->model->whereNull('parent_id')
            ->pluck('name', 'id');
        return [
            'selectCategoriesCodes' => $selectCategoryCodes,
            'selectParentCategories' => $selectParentCategories
        ];
    }

    public function selectAllCategories()
    {
        return $this->getModel()
            ->where('is_active', true)
            ->pluck('name', 'id');
    }

    public function selectParentCategories()
    {
        return $this->getModel()
            ->where('is_active', true)
            ->whereNull('parent_id')
            ->pluck('name', 'id');
    }

    public function getHeaderCategories()
    {
        return $this->getModel()
            ->without('metaTags')
            ->where('is_active', true)
            ->whereParentId(null)
            ->whereInHeader(true)
            ->orderBy('header_position', 'ASC')
            ->select('name', 'slug')
            ->limit(10)
            ->get();
    }

    public function getBodyCategoryByPosition(int $position)
    {
        return $this->getModel()
            ->whereBodyPosition($position)
            ->whereIsActive(true)
            ->select('name', 'slug')
            ->first();
    }

}
