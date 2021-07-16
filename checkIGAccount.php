<?php

//To check all the Instagram accounts that are owned by a business or that can be accessed by a business,
// make a GET request:


$ch = curl_init();


// curl_setopt($ch, CURLOPT_URL, 'business=100405035640930
// \"https://graph.facebook.com/v11.0/4100799329931256/authorized_adaccounts');
curl_setopt($ch,CURLOPT_URL,"https://graph.facebook.com/v11.0/<business_id>/instagram_accounts");
curl_setopt($ch, CURLOPT_URL, 'fields=username');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "access_token=\n-d");

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


// curl_setopt($ch, CURLOPT_URL, 'fields=username,profile_pic');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, "access_token=\n-d");

// $headers = array();
// $headers[] = 'Content-Type: application/x-www-form-urlencoded';
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo '<pre>';
var_dump(json_decode($result,true));
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);




//https://developers.facebook.com/docs/instagram/ads-api/guides/ig-accounts-with-business-manager#account_api

?>