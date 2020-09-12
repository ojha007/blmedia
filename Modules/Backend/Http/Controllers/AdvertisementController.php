<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Advertisement;
use Modules\Backend\Entities\News;
use Modules\Backend\Http\Requests\NewsRequest;
use Modules\Backend\Http\Responses\Response;
use Modules\Backend\Repositories\AdvertisementRepository;


class AdvertisementController extends Controller
{

    protected $routePrefix = 'advertisements';
    protected $viewPath = 'backend::advertisement.';
    /**
     * @var News
     */
    private $model;

    private $repository;

    public function __construct(Advertisement $advertisement)
    {
        $this->model = $advertisement;
        $this->repository = new AdvertisementRepository($advertisement);

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

    public function edit(Advertisement $advertisement)
    {
        $viewPath = $this->viewPath . 'edit';
        return new Response($viewPath, ['advertisement' => $advertisement]);
    }

    public function update()
    {

    }

    public function store(NewsRequest $request)
    {
        dd($request->validated());
    }
}
