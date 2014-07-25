<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey = '57838e0df8cb0c4bcce4d2c53485dffc';
$group  = new Service\Group(new Client($apiKey));

/*
echo '---------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - ADD GROUP' . PHP_EOL;
echo '---------------------------' . PHP_EOL;

$name = 'Test Group';

if (($results = $group->add($name)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $group->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '---------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - GET GROUP' . PHP_EOL;
echo '---------------------------' . PHP_EOL;

$group_id = '504159ea-9f83-4428-afb0-41294954efeb';

if (($results = $group->get($group_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $group->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - UPDATE GROUP' . PHP_EOL;
echo '------------------------------' . PHP_EOL;

$group_id = '504159ea-9f83-4428-afb0-41294954efeb';
$name = 'Test Group Updated';

if (($results = $group->update($group_id, $name)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Name: ' . $results->getName() . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $group->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - DELETE GROUP' . PHP_EOL;
echo '------------------------------' . PHP_EOL;

$group_id = '504159ea-9f83-4428-afb0-41294954efeb';

if (($results = $group->delete($group_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $group->getException()->getMessage() . PHP_EOL;
}
*/
