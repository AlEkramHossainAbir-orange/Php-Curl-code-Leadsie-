<?php

$ch = curl_init();
/**
 * 
 * 
 * Business ID hobe client er and access token hobe user er
 * example business id shakil vai er 
 * page id and access token abir er
 * 
 * 
 * 
 */

//curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v11.0/client business ID/client_pages');
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v11.0/619658698964160/client_pages');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$post = array(
    'page_id' => '',
    'permitted_tasks' => '["ADVERTISE", "ANALYZE"]',
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


?>