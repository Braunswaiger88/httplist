<?php
require  'vendor/autoload.php';
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');


echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
