<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey = '<API KEY GOES HERE>';
$texts  = new Service\Texts(new Client($apiKey));

/*
echo '----------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - LIST TEXTS' . PHP_EOL;
echo '----------------------------' . PHP_EOL;

$pagination = new \DialMyCalls\Pagination(1, 10);
if (($results = $texts->get($pagination)) !== false) {
    foreach ($results as $result) {
        echo 'ID: ' . $result->getId() . PHP_EOL;
        echo 'Name: ' . $result->getName() . PHP_EOL;
        echo 'Pending Cancel: ' . ($result->isPendingCancel() ? 'Yes' : 'No') . PHP_EOL;
        echo 'Credit Cost: ' . $result->getCreditCost() . PHP_EOL;
        echo 'Send At: ' . $result->getSendAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo 'Created At: ' . $result->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo 'Updated At: ' . $result->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo '---' . PHP_EOL;
    }
} else {
    echo 'REQUEST FAILED: ' . $texts->getException()->getMessage() . PHP_EOL;
}
*/
