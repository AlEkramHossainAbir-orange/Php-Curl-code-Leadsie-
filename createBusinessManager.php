<?php

function create_business_manager(){
    $access_token = "";
    $ch = curl_init();

   
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.11/619658698964160/businesses');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    $post = array(
        'name' => 'Apparel abir',
        'vertical' => 'ADVERTISING',
        'primary_page' => '1158471220834651',
        'timezone_id' => '1',
        'access_token' => $access_token
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    $result = curl_exec($ch);
    echo '<pre>';
    var_dump(json_decode($result,true));

    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
}
    create_business_manager();


?>