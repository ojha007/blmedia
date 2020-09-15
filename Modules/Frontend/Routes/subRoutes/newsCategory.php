<?php
Route::get('category/{category}', 'CategoryController@showNewsByCategory')->name('news-category.show');
