<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey    = '<API KEY GOES HERE>';
$recording = new Service\Recording(new Client($apiKey));

/*
echo '-------------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - ADD RECORDING - TTS' . PHP_EOL;
echo '-------------------------------------' . PHP_EOL;

$name     = 'Test Recording';
$gender   = 'M';
$language = 'en';
$text     = 'This is just a test!';

if (($results = $recording->addTts($name, $gender, $language, $text)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Type: ' . $results->getType() . PHP_EOL;
    echo 'Seconds: ' . $results->getSeconds() . PHP_EOL;
    echo 'URL: ' . $results->getUrl() . PHP_EOL;
    echo 'Processed: ' . ($results->isProcessed() ? 'Yes' : 'No') . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $recording->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '-------------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - ADD RECORDING - URL' . PHP_EOL;
echo '-------------------------------------' . PHP_EOL;

$name = 'Test Recording URL';
$url  = 'http://www.dialmycalls.com/audio/apartment-roadwork.mp3';

if (($results = $recording->addUrl($name, $url)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Type: ' . $results->getType() . PHP_EOL;
    echo 'Seconds: ' . $results->getSeconds() . PHP_EOL;
    echo 'URL: ' . $results->getUrl() . PHP_EOL;
    echo 'Processed: ' . ($results->isProcessed() ? 'Yes' : 'No') . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $recording->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '-------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - GET RECORDING' . PHP_EOL;
echo '-------------------------------' . PHP_EOL;

$recording_id = '9499fdd2-a924-4703-9869-472b9094b589';

if (($results = $recording->get($recording_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Type: ' . $results->getType() . PHP_EOL;
    echo 'Seconds: ' . $results->getSeconds() . PHP_EOL;
    echo 'URL: ' . $results->getUrl() . PHP_EOL;
    echo 'Processed: ' . ($results->isProcessed() ? 'Yes' : 'No') . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $recording->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '----------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - UPDATE RECORDING' . PHP_EOL;
echo '----------------------------------' . PHP_EOL;

$recording_id = '9499fdd2-a924-4703-9869-472b9094b589';
$name         = 'Test Recording Updated';

if (($results = $recording->update($recording_id, $name)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Type: ' . $results->getType() . PHP_EOL;
    echo 'Seconds: ' . $results->getSeconds() . PHP_EOL;
    echo 'URL: ' . $results->getUrl() . PHP_EOL;
    echo 'Processed: ' . ($results->isProcessed() ? 'Yes' : 'No') . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $recording->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '----------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - DELETE RECORDING' . PHP_EOL;
echo '----------------------------------' . PHP_EOL;

$recording_id = '9499fdd2-a924-4703-9869-472b9094b589';

if (($results = $recording->delete($recording_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $recording->getException()->getMessage() . PHP_EOL;
}
*/
