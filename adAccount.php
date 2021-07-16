<?php
    $ch = curl_init();

    //curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.11/act_<AD_ACCOUNT_ID>/users');
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v11.0/act_493626251/users');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
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