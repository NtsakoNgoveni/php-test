<?php

require __DIR__ ."/vendor/autoload.php";
include("task2_solution.php");
use Google\Service\Sheets;

function get_products_data($spreadsheetId) {
    $client = new Google_Client();
    $client->setApplicationName("sheets_integration");
    $client->addScope(Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig(__DIR__ . "/credentials.json");
    $service = new Google_Service_Sheets($client);


    $sheetsMetadata = $service->spreadsheets->get($spreadsheetId)->getSheets();
    $products = [];
    foreach ($sheetsMetadata as $sheetMetadata) {
        $sheetName = $sheetMetadata->properties->title;
        $range = $sheetName;
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();

        if (empty($values)) {
            echo "No data found in sheet '$sheetName'.\n";
        } else {
            $keys = array_shift($values);

            foreach ($values as $row) {
                array_push($products, array_combine($keys,$row));
            }
        }
    }
     return $products;
}
/*
$products = get_products_data("1BYojOzsQ08cD3K5UNAUYd0vUoxOJoQvxPnfiJbubQ2o");
$product = get_product($products, 102);
print_r($product);
*/
?>