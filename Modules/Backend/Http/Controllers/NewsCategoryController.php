<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Backend\Entities\News;
use Modules\Backend\Http\Responses\Response;

class NewsCategoryController extends Controller
{

    protected $routePrefix = 'news-category';
    protected $viewPath = 'backend::news-category.';
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

    public function edit()
    {
        return new Response($this->viewPath . 'create');
    }

    public function update()
    {

    }

    public function store()
    {

    }
}
