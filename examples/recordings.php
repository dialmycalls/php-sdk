<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey     = '<API KEY GOES HERE>';
$recordings = new Service\Recordings(new Client($apiKey));

/*
echo '---------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - LIST RECORDINGS' . PHP_EOL;
echo '---------------------------------' . PHP_EOL;

$pagination = new \DialMyCalls\Pagination(1, 10);
if (($results = $recordings->get($pagination)) !== false) {
    foreach ($results as $result) {
        echo 'ID: ' . $result->getId() . PHP_EOL;
        echo 'Name: ' . $result->getName() . PHP_EOL;
        echo 'Type: ' . $result->getType() . PHP_EOL;
        echo 'Seconds: ' . $result->getSeconds() . PHP_EOL;
        echo 'URL: ' . $result->getUrl() . PHP_EOL;
        echo 'Processed: ' . ($result->isProcessed() ? 'Yes' : 'No') . PHP_EOL;
        echo 'Created At: ' . $result->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo 'Updated At: ' . $result->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo '---' . PHP_EOL;
    }
} else {
    echo 'REQUEST FAILED: ' . $recordings->getException()->getMessage() . PHP_EOL;
}
*/
