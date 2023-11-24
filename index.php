<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://google.com/search?q=coding+passive+income");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
