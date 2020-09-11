<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Backend\Entities\NewsCategory;
use Modules\Backend\Http\Requests\NewsCategoryRequest;
use Modules\Backend\Http\Responses\Response;
use Modules\Backend\Repositories\NewsCategoryRepository;

class NewsCategoryController extends Controller
{

    protected $routePrefix = 'news-category';
    protected $viewPath = 'backend::news-category.';
    private $model;
    /**
     * @var NewsCategoryRepository
     */
    private $repository;

    public function __construct(NewsCategory $newsCategory)
    {
        $this->model = $newsCategory;
        $this->repository = new NewsCategoryRepository($newsCategory);
//        $this->middleware('auth:account');
//        $this->middleware('permission:account-permission');
    }


    public function index()
    {
        return new Response($this->viewPath . 'index');
    }

    public function create()
    {
        $viewPath = $this->viewPath . 'create';
        $attributes = [
            'news' => $this->model,
            'selectCategories' => $this->repository->getViewData()
        ];
        return new Response($viewPath, $attributes);
    }

    public function edit()
    {
        return new Response($this->viewPath . 'create');
    }

    public function update()
    {

    }

    public function store(NewsCategoryRequest $request)
    {
        $attributes = $request->validated();
        dd($attributes);
    }
}
