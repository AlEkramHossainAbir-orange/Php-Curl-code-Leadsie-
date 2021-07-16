<?php

/**
 * 
 * 
 * This is The list of pixel ID
 * 
 * future work : get the name of the pixel like ?fields=name
 */


    $ch = curl_init();

    //curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v11.0/<business_id>/adspixels?fields=name?access_token=');
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v11.0/<business_id>/adspixels?fileds=name&&access_token=');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    //curl_setopt($ch, CURLOPT_POSTFIELDS, "fields=\"code\"&access_token=");

    $headers = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    echo '<pre>';
    var_dump(json_decode($result,true));
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

?>