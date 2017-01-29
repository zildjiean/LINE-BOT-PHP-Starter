<?php
$access_token = 'zlO7n7p65AleR7iu0zB+yk8i8juIKfxHd6JqySBY3X/Bxw35QizAG9DV/aomX9VE4LLu3YICTsBl5JTAUij2CIApeWXd4jc3E8uJ1xgPClzj+YqeP7DsKn2bbFjSoA5qnx9V6a/fa4B8lTxMTlVUtwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
