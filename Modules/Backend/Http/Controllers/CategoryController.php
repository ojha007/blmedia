<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Category;
use Modules\Backend\Http\Requests\NewsCategoryRequest;
use Modules\Backend\Http\Responses\Response;
use Modules\Backend\Repositories\NewsCategoryRepository;

class CategoryController extends Controller
{

    protected $routePrefix = 'news-category';
    protected $viewPath = 'backend::news-category.';
    protected $model;
    /**
     * @var NewsCategoryRepository
     */
    protected $repository;

    public function __construct(Category $category)
    {

        $this->model = $category;
        $this->repository = new NewsCategoryRepository($category);
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

    public function edit(Category $category)
    {
        $attributes = [
            'category' => $category,
        ];
        $attributes = array_merge($attributes, $this->repository->getViewData());
        return new Response($this->viewPath . 'edit', $attributes);
    }

    public function update(NewsCategoryRequest $request)
    {
        $attributes = $request->validated();
        dd($attributes);
    }

    public function store(NewsCategoryRequest $request)
    {
        $attributes = $request->validated();
        dd($attributes);
    }

    public function show($id)
    {
        dd($id);
    }
}
