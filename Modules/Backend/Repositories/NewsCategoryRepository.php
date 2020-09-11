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


}
