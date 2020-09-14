<?php
Route::get('news/author/{author_type}/{author}', 'NewsController@showNewsByAuthor')->name('news.showNewsByAuthor');
Route::get('news/{news}', 'NewsController@showNews')->name('news.show');
