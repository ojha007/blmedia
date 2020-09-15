<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    dd('gg');
//    return redirect();
//});

Route::get('/', 'FrontendController@index')->name('index');

Route::get('category/{category}', 'NewsCategoryController@show')->name('news-category.show');;
Auth::routes();
