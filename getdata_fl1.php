<?php
header("Access-Control-Allow-Origin: *");
$api_url = "https://api.football-data.org/v4/competitions/FL1/standings";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "X-Auth-Token: 214319d70a544ce9bad2ce887eb1dbbd"
]);
$response = curl_exec($ch);
curl_close($ch);
header('Content-Type: application/json');
echo $response;
?>
