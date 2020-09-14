<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontendController extends Controller
{

    public function index()
    {
        return view('frontend::index');
    }
    public function singlePage()
    {
        return view('frontend::components.single-page');
    }
    public function detailPage()
    {
        return view('frontend::components.detail-page');
    }

}
