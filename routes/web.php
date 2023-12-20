<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DraginoDeviceController;
use App\Http\Controllers\DraginoSensorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard-v');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::controller(DraginoDeviceController::class)->group(function () {
    Route::prefix('dragino-device')->group(function () {
        // Route::get('/air-temperature/{device}', 'monitorAirTemp')->name('lsn50v2-airtemp');
        Route::get('/air-temperature/{device}', 'monitorAirTemp')->name('lsn50v2-airtemp');
        Route::get('/air-humidity/{device}', 'monitorAirHumidity')->name('lsn50v2-airhumidity');
        Route::get('/soil-temperature/{device}', 'monitorSoilTemp')->name('lsn50v2-soiltemp');
        Route::get('/soil-moisture/{device}', 'monitorSoilMoisture')->name('lsn50v2-soilmoisture');
        Route::get('/light-intensity/{device}', 'monitorLightIntensity')->name('lsn50v2-lightintensity');
    });
});

Route::controller(DraginoSensorController::class)->group(function () {
    Route::prefix('dragino-sensor')->group(function () {
        //Air Temperature
        Route::get('/air-temperature/pull', 'AirTemperaturePull')->name('data-pull-air-temperature');
        Route::get('/air-temperature/get', 'AirTemperatureData')->name('data-get-air-temperature');
        Route::get('/air-temperature/latest', 'AirTemperatureDataLast')->name('data-get-air-temperature-last');

        //Air Humidity
        Route::get('/air-humidity/pull', 'AirHumidityPull')->name('data-pull-humidity');
        Route::get('/air-humidity/get', 'AirHumidityData')->name('data-get-humidity');
        Route::get('/air-humidity/latest', 'AirHumidityDataLast')->name('data-get-humidity-last');

        //Soil Temperature
        Route::get('/soil-temperature/pull', 'SoilTemperaturePull')->name('data-pull-soil-temp');
        Route::get('/soil-temperature/get', 'SoilTemperatureData')->name('data-get-soil-temp');
        Route::get('/soil-temperature/latest', 'SoilTemperatureDataLast')->name('data-get-soil-temp-last');

        //Soil Moisture
        Route::get('/soil-moisture/pull', 'SoilMoisturePull')->name('data-pull-soil-moisture');
        Route::get('/soil-moisture/get', 'SoilMoistureData')->name('data-get-soil-moisture');
        Route::get('/soil-moisture/latest', 'SoilMoistureDataLast')->name('data-get-soil-moisture-last');

        //Light Intensity
        Route::get('/light-intensity/pull', 'LightIntensityPull')->name('data-pull-ligt-intensity');
        Route::get('/light-intensity/get', 'LightIntensityData')->name('data-get-ligt-intensity');
        Route::get('/light-intensity/latest', 'LightIntensityDataLast')->name('data-get-ligt-intensity-last');
    });

});

require __DIR__ . '/auth.php';