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
    }


    public function index()
    {
        $categories = $this->repository->getAll();
        return new Response($this->viewPath . 'index', ['categories' => $categories]);
    }

    public function create()
    {
        $viewPath = $this->viewPath . 'create';
        $attributes = [
            'category' => $this->model,
        ];
        $attributes = array_merge($attributes, $this->repository->getViewData());
        return new Response($viewPath, $attributes);
    }

    public function edit(NewsCategory $newsCategory)
    {
        $attributes = [
            'category' => $newsCategory,
        ];
        $attributes = array_merge($attributes, $this->repository->getViewData());
        return new Response($this->viewPath . 'edit', $attributes);
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
