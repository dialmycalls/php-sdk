<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey  = '<API KEY GOES HERE>';
$account = new Service\Account(new Client($apiKey));

/*
echo '-----------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - GET ACCOUNT' . PHP_EOL;
echo '-----------------------------' . PHP_EOL;

if (($results = $account->get()) !== false) {
    echo 'Credits Available: ' . number_format($results->getCreditsAvailable()) . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $account->getException()->getMessage() . PHP_EOL;
}
*/
