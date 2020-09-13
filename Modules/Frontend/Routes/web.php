<?php


//Route::prefix('frontend')->group(function() {
//    Route::get('/', 'FrontendController@index');
//});
$edition = 'nepali';
Route::group(
    [
        'middleware' => 'web',
        'prefix' => $edition,
        'as' => $edition . '.',
        'edition' => $edition,
        'module' => 'frontend'], function ($router) {
    $router->get('/', 'FrontendController@index');
    include __DIR__ . '/subRoutes/newsCategory.php';
    include __DIR__ . '/subRoutes/news.php';
//    include __DIR__ . '/subRoutes/contact.php';
//    include __DIR__ . '/subRoutes/advertisement.php';
});

