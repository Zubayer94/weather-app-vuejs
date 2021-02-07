<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getWeather', function () {
    $apiKey = config('services.openWeather.key');
    $lat = request('lat');
    $lon = request('lon');
    $response = Http::get("https://api.openweathermap.org/data/2.5/onecall?lat=$lat&lon=$lon&exclude=minutely,hourly&appid=$apiKey&units=metric"); //unit = metric for celcious unit
    return $response->json();
    // $cacheTime = date("h:i:sa");
    // $cacheData = null;
    // if ($cacheTime && $cacheTime > date("h:i:sa", strtotime("-30seconds"))) {
    //     return response()->json(['response' => 'Cached Data!', 'data' => $cacheTime]);
    // } else {
    //     return response()->json(['response' => 'New Done!']);
    // }
    // Log::info(date("h:i:sa"));
    // Log::info(date("h:i:sa", strtotime("-30seconds")));
})->middleware('throttle:5,1');;
