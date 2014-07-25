<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey   = '<API KEY GOES HERE>';
$callerid = new Service\CallerId(new Client($apiKey));

/*
echo '------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - ADD CALLERID' . PHP_EOL;
echo '------------------------------' . PHP_EOL;

$phone = '5613098483';
$name  = 'Test Number';

if (($results = $callerid->add($phone, $name)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Phone: ' . $results->getPhone() . PHP_EOL;
    echo 'Approved: ' . ($results->isApproved() ? 'Yes' : 'No') . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $callerid->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '---------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - VERIFY CALLERID' . PHP_EOL;
echo '---------------------------------' . PHP_EOL;

$phone_id = 'ba580ce9-4cbc-4784-9650-d9e3ef790fef';
$pin      = '6746';

if (($results = $callerid->verify($phone_id, $pin)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Phone: ' . $results->getPhone() . PHP_EOL;
    echo 'Approved: ' . ($results->isApproved() ? 'Yes' : 'No') . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $callerid->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - GET CALLERID' . PHP_EOL;
echo '------------------------------' . PHP_EOL;

$phone_id = 'c2257b4b-d846-4768-810a-30e2d4878486';

if (($results = $callerid->get($phone_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Phone: ' . $results->getPhone() . PHP_EOL;
    echo 'Approved: ' . ($results->isApproved() ? 'Yes' : 'No') . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $callerid->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '---------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - UPDATE CALLERID' . PHP_EOL;
echo '---------------------------------' . PHP_EOL;

$phone_id = 'c2257b4b-d846-4768-810a-30e2d4878486';
$name     = 'Test Number - Updated';

if (($results = $callerid->update($phone_id, $name)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Phone: ' . $results->getPhone() . PHP_EOL;
    echo 'Approved: ' . ($results->isApproved() ? 'Yes' : 'No') . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $callerid->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '---------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - DELETE CALLERID' . PHP_EOL;
echo '---------------------------------' . PHP_EOL;

$phone_id = 'c2257b4b-d846-4768-810a-30e2d4878486';

if (($results = $callerid->delete($phone_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $callerid->getException()->getMessage() . PHP_EOL;
}
*/
