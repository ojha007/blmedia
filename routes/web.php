<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/', 'FrontendController@index')->name('index');
foreach (config('editions') as $edition) {
    Route::get($edition, 'FrontendController@index')->name($edition);
}

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


Route::get('hindi/c-w-l', function () {

    try {
        $start = microtime(TRUE);

        $news = \Modules\Backend\Entities\News::
        with('categories')
            ->orderByDesc('id')
            ->get();
        foreach ($news as $n) {
            $url = $n->image;
            if ($url) {
                if (\Illuminate\Support\Str::contains($url, 'https://breaknlinks.s3.amazonaws.com')) {
                    echo $url . '<br>';
                } else {
                    $handle = @fopen($url, 'r');
                    if ($handle) {
                        $contents = file_get_contents($url);
                        if (\Illuminate\Support\Str::contains($url, 'https://www.breaknlinks.com')) {
                            $fileName = ltrim($url, "https://www.breaknlinks.com/hindi");
                        } else {
                            $a = count($n->categoryName) ? $n->categoryName[0] : 'all';
                            $fileName = substr($url, strrpos($url, '/') + 1);
                            $fileName = '/uploads/' . $a . '/' . $fileName;
                        }

                        Storage::disk('hindi')->put($fileName, $contents, 'public');
                        $a = Storage::disk('hindi')->url($fileName);
                        $n->update([
                            'image' => $a
                        ]);
                        echo $n->image . '-' . $n->id . '<br><br>';
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


Route::get('en/c-w-l', function () {

    try {
        $start = microtime(TRUE);

        $news = \Modules\Backend\Entities\News::
        with('categories')
            ->where('id', '<', 51760)
            ->orderByDesc('id')
            ->get();
        foreach ($news as $n) {
            $url = $n->image;
            if ($url) {
                if (\Illuminate\Support\Str::contains($url, 'https://breaknlinks.s3.amazonaws.com')) {
                    echo $url . '<br>' . $url;
                } else {
                    $handle = @fopen($url, 'r');
                    if ($handle) {
                        $contents = file_get_contents($url);
                        if (\Illuminate\Support\Str::contains($url, 'https://www.breaknlinks.com')) {
                            $fileName = ltrim($url, "https://www.breaknlinks.com/english");
                        } else {
                            $a = count($n->categoryName) ? $n->categoryName[0] : 'all';
                            $fileName = substr($url, strrpos($url, '/') + 1);
                            $fileName = 'uploads/' . $a . '/' . $fileName;
                        }
                        Storage::disk('en')->put($fileName, $contents, 'public');
                        $a = Storage::disk('en')->url($fileName);
                        $n->update([
                            'image' => $a
                        ]);
                        echo $n->image . '-' . $n->id . '<br><br>';
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

Route::get('en/c-w-l-a', function () {

    try {
        $start = microtime(TRUE);
        $news = \Modules\Backend\Entities\Reporter::all();
        foreach ($news as $n) {
            if ($n->image) {
                $url = 'https://www.breaknlinks.com/uploads/reporter/' . $n->image;
                $handle = @fopen($url, 'r');
                if ($handle) {
                    $contents = file_get_contents($url);
                    $fileName = 'uploads/reporters/' . $n->image;
                    Storage::disk('en')->put($fileName, $contents, 'public');
                    $a = Storage::disk('en')->url($fileName);
                    $n->update([
                        'image' => $a
                    ]);
                }
                echo $n->image . '----' . $n->id . '<Br><Br>';
            }

        }
        $end = microtime(TRUE);
        echo "The code took " . ($end - $start) . " seconds to complete.";

    } catch (Exception $exception) {
        \Illuminate\Support\Facades\Log::error($exception->getMessage());
        dd($exception);
    }

});
