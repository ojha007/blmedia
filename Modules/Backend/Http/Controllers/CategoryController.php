<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
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
        $categories = Category::with('childCategories')
            ->whereNull('parent_id')
            ->get();
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
        $attributes = array_merge($data, $this->repository->getViewData($category));
        return new Response($this->viewPath . 'edit', $attributes);
    }

    public function update(NewsCategoryRequest $request, $id)
    {
        $attributes = $request->only((new Category())->getFillable());
        $attributes['slug'] = Str::slug($request->get('slug'));
        $baseRoute = getBaseRouteByUrl($request);
        try {
            DB::beginTransaction();
            $category = $this->repository->update($id, $attributes);
            $this->updateOrCreateRelations($category, $request);
            DB::commit();
            return redirect()->route($baseRoute . '.index')
                ->with('success', 'News Category updated SuccessFully');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage() . '-' . $exception->getTraceAsString());
            DB::rollBack();
            return redirect()->back()->withInput()
                ->with('failed', 'Failed to update News Category');
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

    public function store(NewsCategoryRequest $request)
    {
        $attributes = $request->only((new Category())->getFillable());
        $attributes['slug'] = Str::slug($request->get('slug'));
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

    public function destroy(Request $request, $id)
    {
        $baseRoute = getBaseRouteByUrl($request);
        try {
            $this->repository->delete($id);
            return redirect()->route($baseRoute . '.index')
                ->with('success', 'News Category deleted  SuccessFully');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage() . '-' . $exception->getTraceAsString());
            return redirect()->back()->withInput()
                ->with('failed', 'Failed to delete News Category');
        }
    }
}
