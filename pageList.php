<?php
$ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v11.0/me/accounts?access_token=');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);

    //dd(json_decode($result, true));
    echo '<pre>';
    var_dump(json_decode($result,true));

    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

?>