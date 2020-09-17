<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
        $data = [
            'category' => $category,
        ];
        $attributes = array_merge($data, $this->repository->getViewData());
        return new Response($this->viewPath . 'edit', $attributes);
    }

    public function update(NewsCategoryRequest $request, $id)
    {
        $attributes = $request->only((new Category())->getFillable());
        $baseRoute = getBaseRouteByUrl($request);
        try {
            DB::beginTransaction();
            $category = $this->repository->update($id, $attributes);
//            $this->updateOrCreateRelations($category, $request);
            DB::commit();
            return redirect()->route($baseRoute . '.index')
                ->with('success', 'News was updated SuccessFully');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage() . '-' . $exception->getTraceAsString());
            DB::rollBack();
//            dd($exception);
            return redirect()->back()->withInput()
                ->with('failed', 'Failed to update News');
        }
    }

    public function store(NewsCategoryRequest $request)
    {
        $attributes = $request->only((new Category())->getFillable());
        $baseRoute = getBaseRouteByUrl($request);
        try {
            DB::beginTransaction();
            $category = $this->repository->create($attributes);
            $this->updateOrCreateRelations($category, $request);
            DB::commit();
            return redirect()->route($baseRoute . '.index')
                ->with('success', 'News Created SuccessFully');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage() . '-' . $exception->getTraceAsString());
            DB::rollBack();
            return redirect()->back()->withInput()
                ->with('failed', 'Failed to create News');
        }
    }

    protected function updateOrCreateRelations($category, $request): void
    {
        if (array_filter($request->get('position'))) {
            $attributes = array_merge(['category_id' => $category->id], $request->get('position'));
            $category->position()
                ->updateOrCreate($attributes);
        }
        if (array_filter($request->get('meta'))) {
            $attributes = array_merge(['category_id' => $category->id], $request->get('meta'));
            DB::table('category_meta_tags')
                ->updateOrInsert($attributes);
        }
    }
}
