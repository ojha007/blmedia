<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class SwitchDatabaseConnectionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    protected $edition;

    public function register()
    {
        $this->changeDatabaseConnection();
    }

    protected function changeDatabaseConnection()
    {

        $edition = null;
        if (in_array(request()->segment(1), config('editions'))) {
            $edition = request()->segment(1);
        }
        if (is_null($edition)) {
            $edition = 'nepali';
        }
        DB::purge('mysql');
        DB::disconnect();
        Config::set('file-manager.diskList', [$edition]);
        Config::set('file-manager.routePrefix', $edition . '/bl-secure/file-manager');
        Config::set('database.default', $edition);
        DB::reconnect();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()

    {
        $language = [
            'nepali' => 'ne',
            'en' => 'en',
            'english' => 'en',
            'hindi' => 'hi'
        ];
        $edition = null;
        if (in_array(request()->segment(1), config('editions'))) {
            $edition = request()->segment(1);
        }
        if (is_null($edition)) {
            $edition = 'nepali';
        }
        App::setLocale($language[$edition]);
    }
}
