<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


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
                $data['Invite'] = $item['Invite'];
                $data['Name'] = $item['Name'];
                $data['Vocative'] = $item['Vocative'];
            }
        }

        if ($request->isMethod('post')) {
            try {
                $number = $request->input('number');
                $name = $request->input('name');

                // Create or append to the existing CSV file
                $csvData = [
                    [$name, $number] // Data to be appended
                ];

                // Determine the file path
                $filePath = 'guest-number.csv';

                // Open the CSV file for appending
                $handle = fopen($filePath, 'a');

                // Write the CSV data to the file
                foreach ($csvData as $row) {
                    fputcsv($handle, $row);
                }

                // Close the file handle
                fclose($handle);

                // Redirect back or return a response indicating success
                return view('thanks', $data);
            } catch (\Exception $exception) {
                return view('thanks', $data);
            }

        }

        return view('invite', $data);
    }

    public function thanks(Request $request)
    {

        return view('thanks');
    }

    public function importCSV()
    {
        try {
            $filePath = public_path('loichuc.csv');

            // Check if the file exists
            if (File::exists($filePath)) {
                // Open the CSV file for reading
                $fileHandle = fopen($filePath, 'r');

                $csvData = [];

                $header = fgetcsv($fileHandle);

                while (($row = fgetcsv($fileHandle)) !== false) {
                    // Add the row to the CSV data array
                    $csvData[] = $row;
                }
                fclose($fileHandle);

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

