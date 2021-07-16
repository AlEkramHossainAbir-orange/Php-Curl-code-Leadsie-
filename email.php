<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v11.0/<Business_Id>/business_users');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$post = array(
    'email' => 'shakil.neub@gmail.com',
    'role' => 'ADMIN',
    'access_token' => ''
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$result = curl_exec($ch);

//dd($result);
echo '<pre>';
var_dump(json_decode($result,true));

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);


// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/<API_VERSION>/<BUSINESS_ID>/business_users');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);
// $post = array(
//     'email' => 'some@email.com',
//     'role' => 'ADMIN',
//     'access_token' => '<ACCESS_TOKEN>'
// );
// curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// $result = curl_exec($ch);
// if (curl_errno($ch)) {
//     echo 'Error:' . curl_error($ch);
// }
// curl_close($ch);


?>