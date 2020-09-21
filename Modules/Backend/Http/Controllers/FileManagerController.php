<?php


namespace Modules\Backend\Http\Controllers;


use UniSharp\LaravelFilemanager\Controllers\LfmController;

class FileManagerController extends LfmController
{

    protected $viewPath = 'backend::file-manager.';

    public function index()
    {
        return view($this->viewPath . 'index')
            ->withHelper($this->helper);
    }


    public function store($file)
    {

        $image = $file->store('images', 's3');
    }
}
