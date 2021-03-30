<?php

$ip ='XXX.XXX.XXX.XXX';
$token='your-token-here';

$url = "https://ipinfo.io/{$ip}?token={$token}";  // API URL

function getInfo($hostUrl){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $hostUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // change to 1 to verify cert
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
$ipInfo = curl_exec($ch);

return $ipInfo;
} 

$res = getInfo($url);

echo $res;