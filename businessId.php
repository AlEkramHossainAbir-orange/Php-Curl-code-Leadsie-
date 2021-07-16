<?php

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/100340215658876?fields=business');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    curl_setopt($ch, CURLOPT_POSTFIELDS, "access_token=");

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