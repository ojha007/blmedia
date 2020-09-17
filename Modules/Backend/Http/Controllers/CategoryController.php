<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Backend\Entities\Category;
use Modules\Backend\Entities\CategoryPositions;
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
        $data = [
            'category' => $category,
        ];
        $attributes = array_merge($data, $this->repository->getViewData());
        $positions = CategoryPositions::all();
        dd($positions);
        return new Response($this->viewPath . 'edit', $attributes);
    }

    public function update(NewsCategoryRequest $request)
    {
        $attributes = $request->validated();
        dd($attributes);
    }

    public function store(NewsCategoryRequest $request)
    {
//        $attributes = $request->validated();
        $attributes = $request->only((new Category())->getFillable());
        $baseRoute = getBaseRouteByUrl($request);
        try {
            DB::beginTransaction();
            $category = $this->repository->create($attributes);
            if (array_filter($request->get('position'))) {
                $positions = array_merge(['category_id' => $category->id], $request->get('position'));
                DB::table('category_positions')
                    ->insert($positions);
            }
            if (array_filter($request->get('meta'))) {
                $metaTags = array_merge(['category_id' => $category->id], $request->get('meta'));
                DB::table('category_meta_tags')
                    ->insert($metaTags);
            }
            DB::commit();
            return redirect()->route($baseRoute . '.index')
                ->with('success', 'News Created SuccessFully');
        } catch (\Exception $exception) {
            dd($exception);
            Log::error($exception->getMessage() . '-' . $exception->getTraceAsString());
            DB::rollBack();
            return redirect()->back()->withInput()
                ->with('failed', 'Failed to create News');
        }
    }


    public function show($id)
    {
        dd($id);
    }
}
