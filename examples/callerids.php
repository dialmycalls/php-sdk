<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey    = '57838e0df8cb0c4bcce4d2c53485dffc';
$callerids = new Service\CallerIds(new Client($apiKey));

echo '--------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - LIST CALLERIDS' . PHP_EOL;
echo '--------------------------------' . PHP_EOL;

if (($results = $callerids->get()) !== false) {
    foreach ($results as $result) {
        echo 'ID: ' . $result->getId() . PHP_EOL;
        echo 'Name: ' . $result->getName() . PHP_EOL;
        echo 'Phone: ' . $result->getPhone() . PHP_EOL;
        echo 'Approved: ' . ($result->isApproved() ? 'Yes' : 'No') . PHP_EOL;
        echo 'Created At: ' . $result->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo 'Updated At: ' . $result->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo '---' . PHP_EOL;
    }
} else {
    echo 'REQUEST FAILED: ' . $callerids->getException()->getMessage() . PHP_EOL;
}
