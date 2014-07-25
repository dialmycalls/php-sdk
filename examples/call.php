<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey = '57838e0df8cb0c4bcce4d2c53485dffc';
$call   = new Service\Call(new Client($apiKey));

/*
echo '-----------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - CREATE CALL' . PHP_EOL;
echo '-----------------------------' . PHP_EOL;

$name  = 'Test Call';
$callerid_id = 'a91e4834-dcba-414a-9342-c35d5e37e467';
$recording_id = '3dcc4f15-b3c9-482e-9753-20168dd0b2d5';
$send_at = new \DateTime('+1 month', new \DateTimeZone('UTC'));
$send_immediately = false;
$use_amd = false;
$send_email = false;
$contacts = array(
    array(
        'phone' => '5613098480',
    )
);
$add_ons = array();

if (($results = $call->create($name, $callerid_id, $recording_id, $send_at, $send_immediately, $use_amd,
        $send_email, $contacts, $add_ons)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Pending Cancel: ' . ($results->isPendingCancel() ? 'Yes' : 'No') . PHP_EOL;
    echo 'Credit Cost: ' . $results->getCreditCost() . PHP_EOL;
    echo 'Send At: ' . $results->getSendAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $call->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '--------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - GET CALL' . PHP_EOL;
echo '--------------------------' . PHP_EOL;

$call_id = '27f157b0-f398-4a59-9f5b-7553c5180dd2';

if (($results = $call->get($call_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Pending Cancel: ' . ($results->isPendingCancel() ? 'Yes' : 'No') . PHP_EOL;
    echo 'Credit Cost: ' . $results->getCreditCost() . PHP_EOL;
    echo 'Send At: ' . $results->getSendAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $call->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '-----------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - CANCEL CALL' . PHP_EOL;
echo '-----------------------------' . PHP_EOL;

$call_id = '27f157b0-f398-4a59-9f5b-7553c5180dd2';

if (($results = $call->cancel($call_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $call->getException()->getMessage() . PHP_EOL;
}
*/

echo '---------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - CALL RECIPIENTS' . PHP_EOL;
echo '---------------------------------' . PHP_EOL;

$call_id = 'e8a13014-c12c-41fe-b646-9543b5d21a95';

if (($results = $call->getRecipients($call_id)) !== false) {
    foreach ($results as $result) {
        echo 'First Name: ' . $result->getFirstName() . PHP_EOL;
        echo 'Last Name: ' . $result->getLastName() . PHP_EOL;
        echo 'Email: ' . $result->getEmail() . PHP_EOL;
        echo 'Phone: ' . $result->getPhone() . PHP_EOL;
        echo 'Extension: ' . $result->getExtension() . PHP_EOL;
        echo 'Status: ' . $result->getStatus() . PHP_EOL;
        echo 'Duration: ' . $result->getDuration() . PHP_EOL;
        echo 'Add-On Result: ' . $result->getAddOn() . PHP_EOL;
        echo 'Successful: ' . ($result->isSuccessful() ? 'Yes' : 'No') . PHP_EOL;
        echo 'Attempts: ' . $result->getAttempts() . PHP_EOL;
        echo 'Created At: ' . $result->getCalledAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo '---' . PHP_EOL;
    }
} else {
    echo 'REQUEST FAILED: ' . $call->getException()->getMessage() . PHP_EOL;
}
