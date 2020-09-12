<?php
Route::group(['prefix' => 'settings', 'as' => 'settings.'], function ($setting) {
    $setting->get('{setting}', 'SettingController@index')->name('index');
    $setting->get('/', 'SettingController@store')->name('store');
});

