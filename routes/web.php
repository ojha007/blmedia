<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'FrontendController@index')->name('index');

//Auth::routes(['login' => false]);

Route::get('logs', function () {
    $controller = new \Rap2hpoutre\LaravelLogViewer\LogViewerController();
    return $controller->index();
});
Route::group(['prefix' => 'file-manager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

foreach (config('editions') as $edition) {
    Route::get($edition, 'FrontendController@index')->name($edition);
}
