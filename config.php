<?php

require_once 'vendor/autoload.php';

if(!session_id())
{
    session_start();
}

$facebook = new Facebook\Facebook([
    'app_id' => '', // Replace {app-id} with your app id
    'app_secret' => '',
    'default_graph_version' => 'v3.2',
    ]);
  

?>