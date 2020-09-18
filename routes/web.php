<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    dd('gg');
//    return redirect();
//});

Route::get('/', 'FrontendController@index')->name('index');

Route::get('category/{category}', 'NewsCategoryController@show')->name('news-category.show');;
Auth::routes();

Route::get('logs', function () {
    $controller = new \Rap2hpoutre\LaravelLogViewer\LogViewerController();
    return $controller->index();
});
Route::group(['prefix' => 'file-manager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
