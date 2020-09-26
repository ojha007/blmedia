<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/', 'FrontendController@index')->name('index');
foreach (config('editions') as $edition) {
    Route::get($edition, 'FrontendController@index')->name($edition);
}

Route::get('c-w-l', function () {

    try {
        $start = microtime(TRUE);
        $news = \Modules\Backend\Entities\News::where('id', '<', 35130615)
            ->orderByDesc('id')
            ->get();
        foreach ($news as $n) {
            if ($n->id > 1471) {
                $url = $n->image;
                if ($url) {
                    $handle = @fopen($url, 'r');
                    if ($handle) {
                        $contents = file_get_contents($url);
                        $name = substr($url, strrpos($url, '/') + 1);

                        $fileName = 'nepali/news/' . $name;
                        Storage::disk('s3')->put($fileName, $contents, 'public');
                        $a = Storage::disk('s3')->url($fileName);
                        $n->update([
                            'image' => $a
                        ]);
                    }

                }
            }


        }
        $end = microtime(TRUE);
        echo "The code took " . ($end - $start) . " seconds to complete.";

    } catch (Exception $exception) {
        \Illuminate\Support\Facades\Log::error($exception->getMessage());
        dd($exception);
    }

});
