<?php

namespace App\Http\Controllers;
use App\Models\SensorAirTemperature;
use App\Models\SensorAirHumidity;
use App\Models\SensorLightIntensity;
use App\Models\SensorSoilMoisture;
use App\Models\SensorSoilTemperature;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use GuzzleHttp\Client;

class DashboardController extends Controller
{
 public function index() : View {

//    $dataAirTempBAU = SensorAirTemperature::latest()->paginate(1);
//    $dataAirHumBAU = SensorAirHumidity::latest()->paginate(1);
//    $dataSoilTempBAU = SensorSoilTemperature::latest()->paginate(1);
//    $dataSoilMoistBAU = SensorSoilMoisture::latest()->paginate(1);
//    $dataLightBAU = SensorLightIntensity::latest()->paginate(1);

//    $response = [
//       'data1' => $data1->items(), // Menggunakan items() untuk mendapatkan array dari hasil paginasi
//       'data2' => $data2->items(),
//   ];

// Pull data from API Thingspeak Air Temperature
$client = new Client();
$response = $client->get('https://api.thingspeak.com/channels/1285589/feeds/last.json?timezone=Asia/Jakarta');
$responseData = json_decode($response->getBody(), true);

// Map nama field baru ke nama field lama
$fieldMapping = [
   "soiltempBAU" => "field2",
   "lightBAU" => "field3",
   "airtempBAU" => "field6",
   "airhumBAU" => "field7",
   "soilmoistBAU" => "field8"
];

// Buat array baru dengan nama field yang diinginkan
$outputData = [];
foreach ($fieldMapping as $newField => $oldField) {
   if (isset($responseData[$oldField])) {
       $outputData[$newField] = $responseData[$oldField];
   }
}

// Pull data from API Thingspeak Air Temperature
$client1 = new Client();
$response1 = $client1->get('https://api.thingspeak.com/channels/1291445/feeds/last.json?timezone=Asia/Jakarta');
$responseData1 = json_decode($response1->getBody(), true);

// Map nama field baru ke nama field lama
$fieldMapping1 = [
   "soiltempLC" => "field2",
   "lightLC" => "field3",
   "airtempLC" => "field6",
   "airhumLC" => "field7",
   "soilmoistLC" => "field8"
];

// Buat array baru dengan nama field yang diinginkan
$outputData1 = [];
foreach ($fieldMapping1 as $newField1 => $oldField1) {
   if (isset($responseData1[$oldField1])) {
       $outputData1[$newField1] = $responseData1[$oldField1];
   }
}

// Convert array ke JSON
$data = array_merge([$outputData, $outputData1]);

// Print atau return JSON
//echo $jsonOutput;

//dd($data);

   return view('dashboard.dashboard-v', compact('data'));
 }
}
