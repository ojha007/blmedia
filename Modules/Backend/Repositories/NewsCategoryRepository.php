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


}
