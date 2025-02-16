<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();
$google_client->setHttpClient(new \GuzzleHttp\Client(['verify' => false])); // Disable SSL verification


//Set the OAuth 2.0 Client ID
$google_client->setClientId('345997710286-1h60c4214etfushrufbv8dhjr2nbn4lp.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://3175-42-104-222-149.ngrok-free.app/spicymonk/indexauth.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
