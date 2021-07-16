<?php 
 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/<business_id>/fields=commerce_merchant_settings');
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
 
 curl_setopt($ch, CURLOPT_POSTFIELDS, "access_token=");
 
 $headers = array();
 $headers[] = 'Content-Type: application/x-www-form-urlencoded';
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
 $result = curl_exec($ch);
 if (curl_errno($ch)) {
     echo 'Error:' . curl_error($ch);
 }
 curl_close($ch);

?>