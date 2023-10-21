<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DraginoDeviceController;
use App\Http\Controllers\DraginoSensorController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* 
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [DashboardController::class, 'index']);


Route::controller(DraginoDeviceController::class)->group(function () {
    Route::prefix('dragino-device')->group(function () {
        Route::get('/air-temperature', 'monitorAirTemp')->name('lsn50v2-airtemp');
        Route::get('/air-humidity', 'monitorAirHumidity')->name('lsn50v2-airhumidity');
        Route::get('/soil-temperature', 'monitorSoilTemp')->name('lsn50v2-soiltemp');
        Route::get('/soil-moisture', 'monitorSoilMoisture')->name('lsn50v2-soilmoisture');
        Route::get('/light-intensity', 'monitorLightIntensity')->name('lsn50v2-lightintensity');
    });
});

Route::controller(DraginoSensorController::class)->group(function () {
    Route::prefix('dragino-sensor')->group(function () {
        Route::get('/air-temperature/pull', 'AirTemperaturePull')->name('data-pull-temp');
        Route::get('/air-temperature/get', 'AirTemperatureData')->name('data-get-temp');
        Route::get('/air-temperature/latest', 'AirTemperatureDataLast')->name('data-get-temp-last');
        Route::get('/air-humidity/pull', 'AirHumidityPull')->name('data-pull-humidity');
        Route::get('/air-humidity/get', 'AirHumidityData')->name('data-get-humidity');
    });

});

// Route::get('/dragino-device/air-temperature', [DraginoDeviceController::class, 'index']);
// Route::get('/dragino-device/temperature/data', [DraginoDeviceController::class, 'dataTemperature']);
// Route::get('/dragino-device/temperature/visual', [DraginoDeviceController::class, 'visualTemperature']);
