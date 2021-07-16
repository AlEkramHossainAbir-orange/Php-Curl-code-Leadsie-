<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v11.0/<BUSINESS_ID>/owned_ad_accounts');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$post = array(
    'adaccount_id' => 'act_<AD_ACCOUNT_ID>',
    'access_token' => ''
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$result = curl_exec($ch);
echo '<pre>';
var_dump(json_decode($result,true));
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

//https://developers.facebook.com/docs/marketing-api/business-asset-management/guides/ad-accounts

?>