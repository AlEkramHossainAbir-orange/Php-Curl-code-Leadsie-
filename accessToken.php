<?php

    $access_token= "";
    $partner_BM_ID= "";
    $my_BM_id="";

    $ch = curl_init();

   // curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.11/<PARTNER_BM_ID>/managed_businesses?existing_client_business_id=<CLIENT_BM_ID>&access_token=<USERS_ACCESS_TOKEN>');
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.11/business_id/managed_businesses?existing_client_business_id=1344314266&access_token=gffhfhf');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);

    $result = curl_exec($ch);
    echo '<pre>';
    var_dump(json_decode($result,true));
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

?>