<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Guest;
use Modules\Backend\Entities\News;

class BackendController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $attributes = [
            'total_publish_news' => $this->newsCount(),
            'active_guests' => $this->guestsCount()
        ];

        return view('backend::index', compact('attributes'));
    }

    protected function newsCount()
    {
        return News::where('is_active', true)->count();
    }

    protected function guestsCount()
    {
        return Guest::where('is_active', 1)->count();
    }

}
