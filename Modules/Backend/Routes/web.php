<?php


Route::group(
    [
        'middleware' => 'web',
        'prefix' => 'nepali/bl-secure',
        'as' => 'nepali.bl-secure.',
        'edition' => 'nepali',
        'routePrefix' => 'bl-secure',
        'systemName' => 'Accounts',
        'systemAbbr' => 'Bl',
        'module' => 'backend'], function ($router) {
    $router->get('/', 'BackendController@index');
    include __DIR__ . '/subRoutes/newsCategory.php';
    include __DIR__ . '/subRoutes/news.php';
});

