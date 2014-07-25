<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey  = '57838e0df8cb0c4bcce4d2c53485dffc';
$keyword = new Service\Keyword(new Client($apiKey));

echo '-----------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - GET KEYWORD' . PHP_EOL;
echo '-----------------------------' . PHP_EOL;

$keyword_id = '782ac934-1d80-431a-81be-cf96050aa048';

if (($results = $keyword->get($keyword_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Phone: ' . $results->getKeyword() . PHP_EOL;
    echo 'Status: ' . $results->getStatus() . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $keyword->getException()->getMessage() . PHP_EOL;
}

/*
echo '--------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - DELETE KEYWORD' . PHP_EOL;
echo '--------------------------------' . PHP_EOL;

$keyword_id = '782ac934-1d80-431a-81be-cf96050aa048';

if (($results = $keyword->delete($keyword_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $keyword->getException()->getMessage() . PHP_EOL;
}
*/
