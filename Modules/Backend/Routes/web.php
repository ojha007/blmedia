<?php

$edition = null;
if (in_array(request()->segment(1), config('editions'))) {
    $edition = request()->segment(1);
}
if (is_null($edition)) {
    $edition = 'nepali';
}

Route::group(
    [
//        'middleware' => 'auth',
        'prefix' => $edition . '/bl-secure',
        'as' => $edition . '.bl-secure.',
        'edition' => $edition,
        'routePrefix' => 'bl-secure',
        'systemName' => ucwords($edition) . '-' . 'Backend',
        'systemAbbr' => 'Bl',
        'module' => 'backend'], function ($router) {
    $router->get('/', 'BackendController@index');
    include __DIR__ . '/subRoutes/newsCategory.php';
    include __DIR__ . '/subRoutes/news.php';
    include __DIR__ . '/subRoutes/contact.php';
    include __DIR__ . '/subRoutes/advertisement.php';
    include __DIR__ . '/subRoutes/settings.php';
});

