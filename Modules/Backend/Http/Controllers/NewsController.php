<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Backend\Entities\News;
use Modules\Backend\Http\Requests\NewsRequest;
use Modules\Backend\Http\Responses\Response;
use Modules\Backend\Repositories\NewsRepository;

class NewsController extends Controller
{

    protected $routePrefix = 'news';
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
        return new Response($this->viewPath . 'index');
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
        return new Response($viewPath, ['news' => $news]);
    }

    public function update()
    {

    }

    public function store(NewsRequest $request)
    {
        dd($request->validated());
    }
}
