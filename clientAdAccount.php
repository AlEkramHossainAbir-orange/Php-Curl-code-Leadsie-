<?php

//https://developers.facebook.com/docs/marketing-api/business-asset-management/guides/business-to-business
//client ad account
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v11.0/<BUSINESS_ID>/client_ad_accounts?access_token=');
//curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v11.0/<BUSINESS_ID>/client_ad_accounts?access_token=<ACCESS_TOKEN>');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$post = array(
    'adaccount_id' => 'act_343129890791839',
    'permitted_tasks' => '["ADVERTISE","ANALYZE"]'
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$result = curl_exec($ch);
echo '<pre>';
var_dump(json_decode($result,true));
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

?>