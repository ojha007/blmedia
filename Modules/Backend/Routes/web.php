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
        'middleware' => 'auth',
        'prefix' => $edition . '/bl-secure',
        'as' => $edition . '.bl-secure.',
        'edition' => $edition,
        'routePrefix' => 'bl-secure.',
        'systemName' => ucwords($edition) . '-' . 'Backend',
        'systemAbbr' => 'Bl',
        'module' => 'backend'], function ($router) use ($edition) {
    $router->get('/', 'BackendController@index')->name('dashboard');
    $router->get('/file-manager', 'FileManagerController@index')->name('file-manager.index');
    $router->get('file-manager/jsonitems', 'FileManagerController@getItems');
    $router->get('file-manager/errors', 'FileManagerController@getItems');
    $router->get('file-manager/folders', [
        'uses' => 'FileManagerController@getFolders',
    ]);
    include __DIR__ . '/subRoutes/newsCategory.php';
    include __DIR__ . '/subRoutes/news.php';
    include __DIR__ . '/subRoutes/team.php';

    include __DIR__ . '/subRoutes/contact.php';
    include __DIR__ . '/subRoutes/advertisement.php';
    include __DIR__ . '/subRoutes/settings.php';
    include __DIR__ . '/subRoutes/users.php';


});
//Route::group([
//    'prefix' => $edition . '/bl-secure/file-manager',
//    'edition' => $edition,
//    'routePrefix' => 'bl-secure.',
//    'as' => 'file-manager'
//], function ($fileManager) use ($edition) {
//
//});
//Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//    \UniSharp\LaravelFilemanager\Lfm::routes();
//});
Route::get('logs', function () {
    $controller = new \Rap2hpoutre\LaravelLogViewer\LogViewerController();
    return $controller->index();
});

