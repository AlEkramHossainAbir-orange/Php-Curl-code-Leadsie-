<?php

//    To get pending users who are invited to access a business
$bussiness = "";
$access_token = "";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.11/'. $bussiness.'/pending_users?access_token='. $access_token);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
dd(json_decode($result, true));

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

?>