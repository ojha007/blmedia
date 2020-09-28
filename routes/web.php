<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/', 'FrontendController@index')->name('index');
foreach (config('editions') as $edition) {
    Route::get($edition, 'FrontendController@index')->name($edition);
}

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


//Route::get('en/c-w-l', function () {
//
//    try {
//        $start = microtime(TRUE);
//
//        $news = \Modules\Backend\Entities\Reporter::
//        select("*")
//            ->orderBy("id", 'DESC')
//            ->get();
//        foreach ($news as $n) {
//            $url = $n->image;
//            if ($url) {
//                $handle = @fopen($url, 'r');
//                if ($handle) {
//                    $contents = file_get_contents($url);
//                    $name = substr($url, strrpos($url, '/') + 1);
//                    $fileName = 'english/uploads/reporters/' . $name;
//                    Storage::disk('s3')->put($fileName, $contents, 'public');
//                    $a = Storage::disk('s3')->url($fileName);
//                    $n->update([
//                        'image' => $a
//                    ]);
//                }
//
//            }
//        }
//
//        $end = microtime(TRUE);
//        echo "The code took " . ($end - $start) . " seconds to complete.";
//
//    } catch (Exception $exception) {
        \Illuminate\Support\Facades\Log::error($exception->getMessage());
        dd($exception);
    }

});

Route::get('c-w-l-a', function () {

    try {
        $start = microtime(TRUE);
        $news = \Modules\Backend\Entities\Advertisement::all();
        foreach ($news as $n) {
            if ($n->image) {
                $url = 'https://www.breaknlinks.com/nepali/uploads/advertisement/' . $n->image;
                $handle = @fopen($url, 'r');
                if ($handle) {
                    $contents = file_get_contents($url);
                    $name = substr($url, strrpos($url, '/') + 1);

                    $fileName = 'nepali/uploads/advertisements/' . $name;
                    Storage::disk('s3')->put($fileName, $contents, 'public');
                    $a = Storage::disk('s3')->url($fileName);
                    $n->update([
                        'image' => $a
                    ]);
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
