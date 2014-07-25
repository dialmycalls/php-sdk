<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey = '57838e0df8cb0c4bcce4d2c53485dffc';
$texts  = new Service\Texts(new Client($apiKey));

echo '----------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - LIST TEXTS' . PHP_EOL;
echo '----------------------------' . PHP_EOL;

if (($results = $texts->get()) !== false) {
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
