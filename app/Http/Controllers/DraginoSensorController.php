<?php

namespace App\Http\Controllers;

use App\Models\SensorAirTemperature;
use App\Models\SensorAirHumidity;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use GuzzleHttp\Client;
use DateTime;

class DraginoSensorController extends Controller
{
    
    //
    public function AirTemperaturePull()
    {
        // Pull data from API Thingspeak Air Temperature
        $client = new Client();
        $response = $client->get('https://api.thingspeak.com/channels/1285589/fields/6/last.json?timezone=Asia/Jakarta');
        $data = json_decode($response->getBody(), true);

        //Trasnform data Json into variable
        $airtemp = $data['field6'];
        $timestamp = $data['created_at'];

        $dateTime = new DateTime($timestamp);

        // Data Validation check in database to prevent the duplication
        if (!SensorAirTemperature::where('datetime', $dateTime)->count() > 0) {
            $dataAirtTemp = new SensorAirTemperature(
                [
                    'temperature' => $airtemp,
                    'datetime' => $dateTime
                ]
            );

            $dataAirtTemp->save();
            $statusReturn = ['status' => 'true', 'message' => 'Data has been fetched and stored in the database'];
        } else {
            $statusReturn = ['status' => 'false', 'message' => 'Data has been fetched but data already exists in the database'];
        }

        return response()->json($statusReturn);
    }

    public function AirTemperatureData()
    {
        $data = SensorAirTemperature::all();

        $filteredData = $data->map(function ($item) {
            return [
                'value' => $item->temperature,
                'datetime' => $item->datetime,
            ];
        });

        //dd($filteredData);

        return response()->json(['data' => $filteredData, 'status' => 'true']);
    }

    public function AirTemperatureDataLast()
    {
        $data = SensorAirTemperature::latest()->paginate(1);

        $filteredData = $data->map(function ($item) {
            return [
                'value' => $item->temperature,
                'datetime' => $item->datetime,
            ];
        });

        //dd($filteredData);

        return response()->json(['data' => $filteredData, 'status' => 'true']);
    }

    public function AirHumidityPull()
    {
        // Pull data from API Thingspeak Air Temperature
        $client = new Client();
        $response = $client->get('https://api.thingspeak.com/channels/1285589/fields/7/last.json?timezone=Asia/Jakarta');
        $data = json_decode($response->getBody(), true);

        //Trasnform data Json into variable
        $airhumidity = $data['field7'];
        $timestamp = $data['created_at'];

        $dateTime = new DateTime($timestamp);

        // Data Validation check in database to prevent the duplication
        if (!SensorAirHumidity::where('datetime', $dateTime)->count() > 0) {
            $dataAirtTemp = new SensorAirHumidity(
                [
                    'humidities' => $airhumidity,
                    'datetime' => $dateTime
                ]
            );

            $dataAirtTemp->save();
            $statusReturn = ['status' => 'true', 'message' => 'Data has been fetched and stored in the database'];
        } else {
            $statusReturn = ['status' => 'false', 'message' => 'Data has been fetched but data already exists in the database'];
        }

        return response()->json($statusReturn);
    }

    public function AirHumidityData()
    {
        $data = SensorAirHumidity::all();

        $filteredData = $data->map(function ($item) {
            return [
                'value' => $item->humidities,
                'datetime' => $item->datetime,
            ];
        });

        //dd($filteredData);

        return response()->json(['data' => $filteredData, 'status' => 'true']);
    }
}