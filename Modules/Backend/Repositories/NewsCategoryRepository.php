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


}
