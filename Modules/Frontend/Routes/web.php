<?php

$edition = null;
if (in_array(request()->segment(1), config('editions'))) {
    $edition = request()->segment(1);
}

Route::group(
    [
        'middleware' => 'web',
        'prefix' => $edition,
        'as' => is_null($edition) ? null : $edition . '.',
        'edition' => $edition,
        'module' => 'frontend'], function ($router) use ($edition) {
    include __DIR__ . '/subRoutes/newsCategory.php';
    include __DIR__ . '/subRoutes/news.php';
    $router->get('/', 'FrontendController@index')->name('index');
//    $router->get('/', 'FrontendController@index')->name($edition);
    $router->get('/single-page', 'FrontendController@singlePage')->name('singlePage');
    $router->get('/detail-page', 'FrontendController@detailPage')->name('detailPage');
//    include __DIR__ . '/subRoutes/newsCategory.php';
//    include __DIR__ . '/subRoutes/news.php';
//    include __DIR__ . '/subRoutes/contact.php';
//    include __DIR__ . '/subRoutes/advertisement.php';
});

