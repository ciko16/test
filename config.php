<?php

require_once './vendor/autoload.php';

$google_client = new Google_Client();
$google_client->setAuthConfig('client_secret.json');
$google_client->setRedirectUri('http://localhost/projectUTS/index.php');
$google_client->addScope('email');
$google_client->addScope('profile');

session_start();

?>