<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey   = '<API KEY GOES HERE>';
$keywords = new Service\Keywords(new Client($apiKey));

/*
echo '-------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - LIST KEYWORDS' . PHP_EOL;
echo '-------------------------------' . PHP_EOL;

if (($results = $keywords->get()) !== false) {
    foreach ($results as $result) {
        echo 'ID: ' . $result->getId() . PHP_EOL;
        echo 'Keyword: ' . $result->getKeyword() . PHP_EOL;
        echo 'Status: ' . $result->getStatus() . PHP_EOL;
        echo 'Created At: ' . $result->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo 'Updated At: ' . $result->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo '---' . PHP_EOL;
    }
} else {
    echo 'REQUEST FAILED: ' . $keywords->getException()->getMessage() . PHP_EOL;
}
*/
