<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class WelcomeController extends Controller
{
    public function welcome(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->input('name');

            // Read the JSON file
            $jsonContent = file_get_contents(public_path('guests.json'));

            // Decode JSON data to an associative array
            $data = json_decode($jsonContent, true);

            // Search for the name in the JSON data
            foreach ($data as $item) {
                if ($item['Name'] === $name) {
//                    return Redirect::route('invite', ['name' => $item['Name']]);
                    return response()->json(['redirect' => route('invite', ['name' => $name])]);
                }
            }

            // If name not found
            return response()->json(['success' => false, 'message' => 'Name not found']);
        }
        return view('welcome');
    }
    public function invite(Request $request, $name)
    {
        $jsonContent = file_get_contents(public_path('guests.json'));
        // Decode JSON data to an associative array
        $jsons = json_decode($jsonContent, true);
        $data = [];
        foreach ($jsons as $item) {
            if ($item['Name'] === $name) {
                $data['invite'] = $item['Loi chuc'];
                $data['name'] = $item['Name'];
            }
        }
        if ($request->isMethod('post')) {
            $name = $request->input('name');

            // Read the JSON file
            $jsonContent = file_get_contents(public_path('guests.json'));

            // Decode JSON data to an associative array
            $data = json_decode($jsonContent, true);

            // Search for the name in the JSON data
            foreach ($data as $item) {
                if ($item['Name'] === $name) {
                    return response()->json(['redirect' => route('invite')]);
                }
            }

            // If name not found
            return response()->json(['success' => false, 'message' => 'Name not found']);
        }
        return view('invite', $data);
    }
    public function thanks(Request $request)
    {

        return view('thanks');
    }
    public function importCSV() {
        try {
            $filePath = public_path('loichuc.csv');

            // Check if the file exists
            if (File::exists($filePath)) {
                // Read the CSV file into an array
                $csvData = array_map('str_getcsv', file($filePath));

                // Extract the header row
                $header = array_shift($csvData);

                // Initialize an empty array to store the imported data
                $importedData = [];

                // Iterate through each row of the CSV data
                foreach ($csvData as $row) {
                    // Combine the header and row values into an associative array
                    $rowData = array_combine($header, $row);

                    // Add the row data to the imported data array
                    $importedData[] = $rowData;
                }
                // Convert the array to JSON format
                $jsonData = json_encode($importedData, JSON_PRETTY_PRINT);

                // Write the JSON data to a file
                file_put_contents(public_path('guests.json'), $jsonData);
            }
            return redirect()->route('welcome');
        } catch (\Throwable $th) {
            return response()->view('errors.404', [], 404);
        }

    }
}

