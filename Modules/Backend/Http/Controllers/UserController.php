<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Auth\Entities\User;
use Modules\Backend\Entities\News;


class UserController extends Controller
{

    protected $routePrefix = 'users';
    protected $viewPath = 'backend::users.';
    /**
     * @var News
     */
    private $model;

    private $repository;

    public function __construct(User $user)
    {
//        $this->model = $advertisement;
//        $this->repository = new AdvertisementRepository($advertisement);

    }


}
