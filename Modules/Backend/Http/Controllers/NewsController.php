<?php

namespace Modules\Backend\Http\Controllers;

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
//        $this->middleware('auth:account');
//        $this->middleware('permission:account-permission');
    }


    public function index()
    {
        $news = DB::table('news')
            ->leftJoin('guests', 'news.guest_id', '=', 'guests.id')
            ->leftJoin('reporters', 'news.reporter_id', '=', 'reporters.id')
            ->select('news.id', 'reporters.name as reporter', 'guests.name as guest', 'news.title', 'news.publish_date')
            ->orderBy('id', 'DESC')
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
        $attributes = [
            'news' => $news
        ];
        $attributes = array_merge($attributes, $viewData);
        return new Response($viewPath, $attributes);
    }

    public function update(NewsRequest $request, News $news)
    {

    }

    public function store(NewsRequest $request)
    {
        $attributes = $request->validated();
        $baseRoute = getBaseRouteByUrl($request);
        try {
            DB::beginTransaction();
            $this->repository->create($attributes);
            DB::commit();
            return redirect()->route($baseRoute . '.index')
                ->with('success', 'News Created SuccessFully');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage() . '-' . $exception->getTraceAsString());
            DB::rollBack();
            dd($exception);
            return redirect()->back()->withInput()
                ->with('failed', 'Failed to create News');
        }
    }
//    public function update(){

}
