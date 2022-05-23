<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://analytics2.dlt.transcodeglobal.com/bkkmap/bkkrd_current_info.csv");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

curl_close($ch);

$resp = json_decode($resp);

echo "<pre>";print_r($resp);echo "</pre>";

?>