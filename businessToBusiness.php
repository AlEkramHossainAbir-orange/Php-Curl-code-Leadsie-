<?php

//Assigning a business to a Page requires a page token

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v11.0/<page_id>/agencies?access_token=EAAqXFOLkdBcBALV4BUgPSRxWTighVILELB0j1mZA30UGK3oPikfnbp6rcZCTE1F7T5B5CQXw7rcy7ozBDttujV1AlzMWW7O1oUGQnWeUZBrRnZA7yfzgxxZCxpZBvm7IVIKIEkMn3dxxd0vHJvAZCa1CVBWlkqiCkej0Yu0DJd0xqjexUeBQZB2DI7fQ5iiVZB3qqM7EGnjndZBwZDZD');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$post = array(
    'business' => '',
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


//https://developers.facebook.com/docs/marketing-api/business-asset-management/guides/business-to-business

?>
