<?php

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v11.0/100405035640930/agencies?access_token=');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    $post = array(
        'business' => '100405035640930',
        'permitted_tasks' => '["MODERATE", "ADVERTISE", "ANALYZE"]'
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