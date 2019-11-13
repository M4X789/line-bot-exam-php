<?php


$access_token = 'Z1PANZpBLZbHJ1IkhNJ855krREEKQbGdU1uth+e0UNSJiz7VZi3X7GunQIh9do6N94CsNm8qiiEj5wggt9z9eIYHDrcXLKLjX7t2FSWSR7nfB0PQwBKK6j8ELvRjIltGWoR33xivQ4NZG2ja1Ypa8gdB04t89/1O/w1cDnyilFU=
';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

