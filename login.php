<?php

error_reporting(E_ALL);

/*
* Author: Abolfazl
* Telegram: @xewos
* Github: @xouw
* Version: 1
*/

$login = json_encode(['username' => 'devil', 'password' => '12345678']);

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, 'https://ahapi.site/login');
curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($handle, CURLOPT_POST, 1);
curl_setopt($handle, CURLOPT_POSTFIELDS, $login);

$headers = [
  'Host: ahapi.site',
  'Accept: application/json, text/plain, */*',
  'X-Mobile-App-Version: 1.7.3',
  'X-Mobile-App-Market: google-play',
  'user-agent:Ahangify Mobile/1.7.3 (Huawei HONOR 9A on Android 8.1 O MR1 (27))',
  'X-Language: en',
  'Content-Type: application/json;charset=utf-8',
  'Content-Length: '.strlen($login)
  ];

curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
$result = json_decode(curl_exec($handle));
curl_close($handle);

file_put_contents('auth.txt', $result->access_token);
chmod('auth.txt', 0400);
echo '• Login was successful: ' . "$result->access_token";

/*
* Author: Abolfazl
* Telegram: @xewos
* Github: @xouw
* Version: 1
*/
