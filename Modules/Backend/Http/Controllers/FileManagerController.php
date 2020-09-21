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

    public function getItems()
    {
        $currentPage = self::getCurrentPageFromRequest();

        $perPage = $this->helper->getPaginationPerPage();
        $items = array_merge($this->lfm->folders(), $this->lfm->files());

        return [
            'items' => array_map(function ($item) {
                return $item->fill()->attributes;
            }, array_slice($items, ($currentPage - 1) * $perPage, $perPage)),
            'paginator' => [
                'current_page' => $currentPage,
                'total' => count($items),
                'per_page' => $perPage,
            ],
            'display' => $this->helper->getDisplayMode(),
            'working_dir' => $this->lfm->path('working_dir'),
        ];
    }

    private static function getCurrentPageFromRequest()
    {
        $currentPage = (int)request()->get('page', 1);
        $currentPage = $currentPage < 1 ? 1 : $currentPage;

        return $currentPage;
    }

    public function getFolders()
    {
        $folder_types = array_filter(['user', 'share'], function ($type) {
            return $this->helper->allowFolderType($type);
        });

        return view('backend::file-manager.tree')
            ->with([
                'root_folders' => array_map(function ($type) use ($folder_types) {
                    $path = $this->lfm->dir($this->helper->getRootFolder($type));

                    return (object)[
                        'name' => trans('laravel-filemanager::lfm.title-' . $type),
                        'url' => $path->path('working_dir'),
                        'children' => $path->folders(),
                        'has_next' => !($type == end($folder_types)),
                    ];
                }, $folder_types),
            ]);
    }

    public function getErrors()
    {
        return parent::getErrors();

    }
}
