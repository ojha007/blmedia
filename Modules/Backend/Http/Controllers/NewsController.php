<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Backend\Entities\News;
use Modules\Backend\Http\Responses\Response;

class NewsController extends Controller
{

    protected $routePrefix = 'news';
    protected $viewPath = 'backend::news.';
    /**
     * @var News
     */
    private $model;

    public function __construct(News $news)
    {
        $this->model = $news;
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
        return new Response($viewPath, ['news' => $this->model]);
    }

    public function edit(News $news)
    {
        $viewPath = $this->viewPath . 'edit';
        return new Response($viewPath, ['news' => $news]);
    }

    public function update()
    {

    }

    public function store()
    {

    }
}
