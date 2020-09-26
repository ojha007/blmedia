<?php

use Aws\S3\Exception\S3Exception;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/', 'FrontendController@index')->name('index');
foreach (config('editions') as $edition) {
    Route::get($edition, 'FrontendController@index')->name($edition);
}
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


Route::get('/c-w-l', function () {

    try {
        $fs = \Storage::disk('s3');
        $driver = $fs->getDriver();
        $adapter = $driver->getAdapter();
        $client = $adapter->getClient();
        $newss = \Modules\Backend\Entities\News::all()->take(2);
        foreach ($newss as $news) {

            try {
                $ch = curl_init($news->image);
                $fp = fopen(asset('/backend/images/'), 'wb');
                curl_setopt($ch, CURLOPT_FILE, $fp);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_exec($ch);
                curl_close($ch);
                fclose($fp);
                $fileURL = str_replace('https://www.breaknlinks.com', '', $news->image);
                $tempFilePath = asset('/backend/images/') . basename($fileURL);
                $tempFile = fopen($tempFilePath, "w") or die("Error: Unable to open file.");
                $fileContents = file_get_contents($fileURL);
                $tempFile = file_put_contents($tempFilePath, $fileContents);
                dd($tempFile);
                $source = fopen("/source/file.typ", "r");
                $client->putObject([
                    'Bucket' => 'name-of-the-app',
                    'Key' => 'destination/path',
                    'Body' => $source,
                ]);


            } catch (S3Exception $e) {
                \Illuminate\Support\Facades\Log::error($e->getMessage());
            } catch (Exception $e) {
                \Illuminate\Support\Facades\Log::error($e->getMessage());
            }
        }
    } catch (Exception $exception) {
        dd($exception);
    }


});


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
