<?php

namespace Modules\Frontend\Http\Controllers;

use Modules\Frontend\Entities\NewsCategory;

class NewsCategoryController extends \Modules\Backend\Http\Controllers\NewsCategoryController
{

    protected $module = 'fronted';
    protected $model;
    protected $repository;

    public function __construct(NewsCategory $newsCategory)
    {
        $this->model = $newsCategory;
        parent::__construct($newsCategory);
    }

    public function show($slug)
    {
        $category = $this->repository
            ->getModel()
            ->with('news')
            ->where('slug', $slug)
            ->first();
//           return
    }

}
