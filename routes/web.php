<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'FrontendController@index')->name('index');
foreach (config('editions') as $edition) {
    Route::get($edition, 'FrontendController@index')->name($edition);
}
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

