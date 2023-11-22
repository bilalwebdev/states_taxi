<?php

include('app/functions.php');

require('vendor/autoload.php');


use GuzzleHttp\Client;


$access_token = 'Bearer IA.VUNmGAAAAAAAEgASAAAABwAIAAwAAAAAAAAAEgAAAAAAAAGgAAAAFAAAAAAADgAQAAQAAAAIAAwAAAAOAAAAdAAAABwAAAAEAAAAEAAAAEUAuTFWHd_82GjhNo5EFCFNAAAAiuQJ06d7L9f8Gfw6CCKfd6DgZemXUvO7UtgSbRD8FmY6qyTyF__ZImeK2wLThO0hx-u2izA2eMXRkpHUF307tSeYtFm0dVlVS3o2qDYAAAAMAAAAkO_a0QAr8GXdbV_lJAAAAGIwZDg1ODAzLTM4YTAtNDJiMy04MDZlLTdhNGNmOGUxOTZlZQ';

// $client = new Client();

$url = 'https://sandbox-api.uber.com/v1/health/sandbox/run';

$client = new Client();
$headers = [
  'Content-Type' => 'text/plain',
  'Authorization' => $access_token
];
$body = '{
      "driver_locations": [
        {
          "latitude": 40.75176657279212,
          "longitude": -73.98786252473836
        }
      ],
      "pickup_location": {
        "latitude": 40.7517665,
        "longitude": -73.98786252
      },
      "dropoff_location": {
        "latitude": 40.75279,
        "longitude": -74.00465
      },
      "parent_product_type_id": "6a8e56b8-914e-4b48-a387-e6ad21d9c00c"
    }';
$res = $client->post($url, [
  'headers' => $headers,
  'body' => $body
]);

$body = $res->getBody()->getContents();

// Decode the JSON response (assuming the API returns JSON)
$data = json_decode($body, true);

// Do something with the data
//print_r($data['run_id']);

//order a trip

$url = 'https://sandbox-api.uber.com/v1/health/trips';

$headers = [
  'Content-Type' => 'application/json',
  'x-uber-sandbox-runuuid' => $data['run_id'],
  'Authorization' => $access_token
];

$body = '{
  "guest": {
    "email": "bilal@lc.com",
    "first_name": "bilal",
    "last_name": "haider",
    "phone_number": "+14155550001"
  },
  "product_id": "a1111c8c-c720-46c3-8534-2fcdd730040d",
  "start_latitude": 37.776,
  "start_longitude": -122.417,
  "end_latitude": 37.789,
  "end_longitude": -122.4,
  "contacts_to_notify": [
    {
      "phone_number": "+14155550001",
      "contact_event": [
        "TRIP_BEGAN"
      ]
    },
    {
      "phone_number": "+14155550001",
      "contact_event": [
        "DRIVER_PICKUP_COMPLETED"
      ]
    }
  ]
}';



$res = $client->post($url, [
  'headers' => $headers,
  'body' => $body
]);



//change driver state


$url = 'https://sandbox-api.uber.com/v1/health/sandbox/driver-state';

$headers = [
  'Content-Type' => 'application/json',
  'Authorization' => $access_token

];


$body = '{
    "run_id": "' . $data["run_id"] . '",
    "driver_id": "actor-driver-a",
    "driver_state": "ACCEPT"
}';

//debug($body);

$res = $client->post($url, [
  'headers' => $headers,
  'body' => $body
]);


$body = $res->getBody()->getContents();

// Decode the JSON response (assuming the API returns JSON)
$data = json_decode($body, true);

// Do something with the data
print_r($data);
