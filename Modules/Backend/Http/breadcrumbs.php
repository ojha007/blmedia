<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

$edition = null;
if (in_array(request()->segment(1), config('editions'))) {
    $edition = request()->segment(1);
}
if (is_null($edition)) {
    $edition = 'nepali';
}

Breadcrumbs::for('dashboard', function ($trail) use ($edition) {
    $trail->push('Dashboard', route($edition . '.bl-secure.'));
});
Breadcrumbs::for('settings.index', function ($trail, $setting, $routePrefix) use ($edition) {
    $trail->parent('dashboard', route($edition . '.bl-secure.'));
    $trail->push('Setting', route("$routePrefix.settings.index", $setting));
});
Breadcrumbs::resource('news', 'News');
Breadcrumbs::resource('reporters', 'Reporters');
Breadcrumbs::resource('guests', 'Guests');
Breadcrumbs::resource('users', 'Users');
Breadcrumbs::resource('advertisements', 'Advertisements');

