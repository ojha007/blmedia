<?php

use Aws\S3\Exception\S3Exception;
use Illuminate\Support\Facades\Route;


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

