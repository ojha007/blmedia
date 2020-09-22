<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Backend\Entities\News;
use Modules\Backend\Http\Requests\NewsRequest;
use Modules\Backend\Http\Responses\Response;
use Modules\Backend\Repositories\NewsRepository;

class NewsController extends Controller
{

    protected $baseRoute = 'news';
    protected $viewPath = 'backend::news.';
    /**
     * @var News
     */
    private $model;
    /**
     * @var NewsRepository
     */
    private $repository;

    public function __construct(News $news)
    {

        $this->model = $news;
        $this->repository = new NewsRepository($news);
    }


    public function index()
    {
        $is_special = \request()->get('is_special');
        $is_anchor = \request()->get('is_anchor');
        $news = News::with(['categories', 'reporter', 'guest'])
            ->orderBy('news.id', 'DESC')
            ->when($is_special, function ($a) use ($is_special) {
                $a->where('is_special', $is_special);
            })
            ->when($is_anchor, function ($a) use ($is_anchor) {
                $a->where('is_anchor', $is_anchor);
            })
            ->paginate(20);
        return new Response($this->viewPath . 'index', ['allNews' => $news]);
    }

    public function create()
    {
        $viewPath = $this->viewPath . 'create';
        $viewData = $this->repository->getViewData();
        return new Response($viewPath, $viewData);
    }

    public function edit(News $news)
    {
        $viewPath = $this->viewPath . 'edit';
        $viewData = $this->repository->getViewData();
        $newsTags = $news->tagList ?? [];
        if ($newsTags) {
            $newsTags = explode(',', $newsTags);
        }
        $attributes = [
            'news' => $news,
            'news_tags' => is_array($newsTags) ? $newsTags : []
        ];
        $attributes = array_merge($attributes, $viewData);
        return new Response($viewPath, $attributes);
    }

    public function update(NewsRequest $request, $id)
    {
        $attributes = $request->validated();
        $baseRoute = getBaseRouteByUrl($request);
        try {
            DB::beginTransaction();
            $news = $this->repository->update($id, $attributes);
            $news->categories()->sync($request->get('category_id'));
            if ($request->get('tags'))
                $news->retag($request->get('tags'));
            DB::commit();
            return redirect()->route($baseRoute . '.index')
                ->with('success', 'News Updated SuccessFully');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage() . '-' . $exception->getTraceAsString());
            DB::rollBack();
            return redirect()->back()->withInput()
                ->with('failed', 'Failed to Update News');
        }

    }

    public function store(NewsRequest $request)
    {
        $attributes = $request->validated();
        $baseRoute = getBaseRouteByUrl($request);
        try {
            DB::beginTransaction();
            if (is_null($attributes['slug'])) {
                $attributes['slug'] = \Illuminate\Support\Str::slug($request->get('title'));
            }
            $news = $this->repository->create($attributes);
            $news->categories()->sync($request->get('category_id'));
            if ($request->get('tags'))
                $news->tag($request->get('tags'));
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

    public function show(News $news)
    {
        return new Response($this->viewPath . 'show', ['news' => $news]);
    }

    public function destroy(Request $request, News $news)
    {
        $baseRoute = getBaseRouteByUrl($request);

        try {
            DB::beginTransaction();
            $news->delete();
            DB::commit();
            return redirect()->route($baseRoute . '.index')
                ->with('success', 'News Deleted SuccessFully');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage() . '-' . $exception->getTraceAsString());
            return redirect()->route($baseRoute . '.index')
                ->with('failed', 'Failed to delete news.');
        }

    }
}
