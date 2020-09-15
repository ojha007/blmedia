<?php
Route::get('category/{category}', 'NewsCategoryController@showNewsByCategory')->name('news-category.show');
