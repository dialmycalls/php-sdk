<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey = '57838e0df8cb0c4bcce4d2c53485dffc';
$text   = new Service\Text(new Client($apiKey));

/*
echo '-----------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - CREATE TEXT' . PHP_EOL;
echo '-----------------------------' . PHP_EOL;

$name  = 'Test Text';
$keyword_id = '7a1a42de-9a53-406c-967b-355ecd8e1e25';
$messages = array('Message #1');
$send_at = new \DateTime('+1 month', new \DateTimeZone('UTC'));
$send_immediately = false;
$send_email = false;
$contacts = array(
    array(
        'phone' => '5613098480',
    )
);

if (($results = $text->create($name, $keyword_id, $messages, $send_at, $send_immediately,
        $send_email, $contacts)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Pending Cancel: ' . ($results->isPendingCancel() ? 'Yes' : 'No') . PHP_EOL;
    echo 'Credit Cost: ' . $results->getCreditCost() . PHP_EOL;
    echo 'Send At: ' . $results->getSendAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $text->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '--------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - GET TEXT' . PHP_EOL;
echo '--------------------------' . PHP_EOL;

$text_id = '551b7eb9-77ff-403c-8256-ed8010345eeb';

if (($results = $text->get($text_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Pending Cancel: ' . ($results->isPendingCancel() ? 'Yes' : 'No') . PHP_EOL;
    echo 'Credit Cost: ' . $results->getCreditCost() . PHP_EOL;
    echo 'Send At: ' . $results->getSendAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $text->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '-----------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - CANCEL TEXT' . PHP_EOL;
echo '-----------------------------' . PHP_EOL;

$text_id = '551b7eb9-77ff-403c-8256-ed8010345eeb';

if (($results = $text->cancel($text_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $text->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '---------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - TEXT RECIPIENTS' . PHP_EOL;
echo '---------------------------------' . PHP_EOL;

$text_id = '551b7eb9-77ff-403c-8256-ed8010345eeb';

if (($results = $text->getRecipients($text_id)) !== false) {
    foreach ($results as $result) {
        echo 'First Name: ' . $result->getFirstName() . PHP_EOL;
        echo 'Last Name: ' . $result->getLastName() . PHP_EOL;
        echo 'Email: ' . $result->getEmail() . PHP_EOL;
        echo 'Phone: ' . $result->getPhone() . PHP_EOL;
        echo 'Status: ' . $result->getStatus() . PHP_EOL;
        echo 'Successful: ' . ($result->isSuccessful() ? 'Yes' : 'No') . PHP_EOL;
        echo '---' . PHP_EOL;
    }
} else {
    echo 'REQUEST FAILED: ' . $text->getException()->getMessage() . PHP_EOL;
}
*/
