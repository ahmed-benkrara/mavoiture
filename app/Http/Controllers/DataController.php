<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Mark;
use App\Models\Modele;
use App\Models\Generation;
use App\Models\Motorisation;
use App\Models\PriceRange;
use App\Models\Car;

class DataController extends Controller
{
    public function uploadForm()
    {
        return view('data');
    }

    public function processExcel(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('excel_file');
        $spreadsheet = IOFactory::load($file->getRealPath());
        $worksheet = $spreadsheet->getActiveSheet();
        $data = $worksheet->toArray();
        for ($i = 1; $i < count($data); $i++) {
            $row = $data[$i];
            
            // Extract data from the row
            $brandName = $row[0];
            $modeleName = $row[1];
            $generationName = $row[2] ?: null;
            $essenceMotorisations = explode(' - ', $row[3]);
            $dieselMotorisations = explode(' - ', $row[4]);
            $electriqueMotorisations = explode(' - ', $row[5]);
            $hybridMotorisations = explode(' - ', $row[6]);
            list($minPrice, $maxPrice) = explode('-', $row[7]);
            $imageLink = '/images/cars/1696889559.jpg';

            // Create or retrieve Brand, Modele, and Generation
            $brand = Mark::firstOrCreate(['name' => $brandName]);
            $modele = Modele::firstOrCreate(['name' => $modeleName, 'mark_id' => $brand->id]);
            $generation = $generationName ? Generation::firstOrCreate(['name' => $generationName, 'modele_id' => $modele->id]) : null;
            
            $mi = $minPrice;
            $mx = 0;
            $pcs = [];
            $x = (($maxPrice - $minPrice) / 10000);
            for($j = 0; $j<$x; $j++){
                $mx = $mi + 10000;
                array_push($pcs, ['min' => $mi, 'max' => $mx]);
                $mi = $mx;
            }
            
            // Process essence motorisations
            foreach ($essenceMotorisations as $key => $motorisationName) {
                $motorisation = Motorisation::updateOrCreate([
                    'type' => 'essence',
                    'name' => $motorisationName,
                    'modele_id' => $modele->id,
                ]);

                $car = new Car();
                $car->image = $imageLink;
                $car->motorisation_id = $motorisation->id;
                $car->generation_id = $generation ? $generation->id : null;
                $car->save();
                
                foreach($pcs as $item){
                    // Convert the price range to "1M-2M" format
                    $minPriceM = floor($item['min'] / 10000) . 'M';
                    $maxPriceM = floor($item['max'] / 10000) . 'M';
                    $priceRange = PriceRange::updateOrCreate([
                        'name' => "$minPriceM-$maxPriceM",
                        'min' => $item['min'],
                        'max' => $item['max'],
                    ]);
                    $car->priceranges()->attach($priceRange);
                }
            }
            
            // Process diesel motorisations
            foreach ($dieselMotorisations as $motorisationName) {
                $motorisation = Motorisation::updateOrCreate([
                    'type' => 'diesel',
                    'name' => $motorisationName,
                    'modele_id' => $modele->id,
                ]);

                $car = new Car();
                $car->image = $imageLink;
                $car->motorisation_id = $motorisation->id;
                $car->generation_id = $generation ? $generation->id : null;
                $car->save();


                foreach($pcs as $item){
                    // Convert the price range to "1M-2M" format
                    $minPriceM = floor($item['min'] / 10000) . 'M';
                    $maxPriceM = floor($item['max'] / 10000) . 'M';
                    $priceRange = PriceRange::updateOrCreate([
                        'name' => "$minPriceM-$maxPriceM",
                        'min' => $item['min'],
                        'max' => $item['max'],
                    ]);
                    $car->priceranges()->attach($priceRange);
                }
            }
            
            // Process electrique motorisations
            foreach ($electriqueMotorisations as $motorisationName) {
                $motorisation = Motorisation::updateOrCreate([
                    'type' => 'electrique',
                    'name' => $motorisationName,
                    'modele_id' => $modele->id,
                ]);

                $car = new Car();
                $car->image = $imageLink;
                $car->motorisation_id = $motorisation->id;
                $car->generation_id = $generation ? $generation->id : null;
                $car->save();


                foreach($pcs as $item){
                    // Convert the price range to "1M-2M" format
                    $minPriceM = floor($item['min'] / 10000) . 'M';
                    $maxPriceM = floor($item['max'] / 10000) . 'M';
                    $priceRange = PriceRange::updateOrCreate([
                        'name' => "$minPriceM-$maxPriceM",
                        'min' => $item['min'],
                        'max' => $item['max'],
                    ]);
                    $car->priceranges()->attach($priceRange);
                }
            }
            
            // Process hybrid motorisations
            foreach ($hybridMotorisations as $motorisationName) {
                $motorisation = Motorisation::updateOrCreate([
                    'type' => 'hybrid',
                    'name' => $motorisationName,
                    'modele_id' => $modele->id,
                ]);

                $car = new Car();
                $car->image = $imageLink;
                $car->motorisation_id = $motorisation->id;
                $car->generation_id = $generation ? $generation->id : null;
                $car->save();


                foreach($pcs as $item){
                    // Convert the price range to "1M-2M" format
                    $minPriceM = floor($item['min'] / 10000) . 'M';
                    $maxPriceM = floor($item['max'] / 10000) . 'M';
                    $priceRange = PriceRange::updateOrCreate([
                        'name' => "$minPriceM-$maxPriceM",
                        'min' => $item['min'],
                        'max' => $item['max'],
                    ]);
                    $car->priceranges()->attach($priceRange);
                }
            }
        }

        return 'File processed, and data inserted into the database.';
    }
}