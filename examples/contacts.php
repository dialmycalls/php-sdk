<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey   = '<API KEY GOES HERE>';
$contacts = new Service\Contacts(new Client($apiKey));

/*
echo '-------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - LIST CONTACTS' . PHP_EOL;
echo '-------------------------------' . PHP_EOL;

$pagination = new \DialMyCalls\Pagination(1, 10);
if (($results = $contacts->get(null, $pagination)) !== false) {
    foreach ($results as $result) {
        echo 'ID: ' . $result->getId() . PHP_EOL;
        echo 'First Name: ' . $result->getFirstName() . PHP_EOL;
        echo 'Last Name: ' . $result->getLastName() . PHP_EOL;
        echo 'Email: ' . $result->getEmail() . PHP_EOL;
        echo 'Phone: ' . $result->getPhone() . PHP_EOL;
        echo 'Extension: ' . $result->getExtension() . PHP_EOL;
        echo 'Extra: ' . $result->getExtra1() . PHP_EOL;
        echo 'Groups: ' . $result->getGroups() . PHP_EOL;
        echo 'Created At: ' . $result->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo 'Updated At: ' . $result->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo '---' . PHP_EOL;
    }
} else {
    echo 'REQUEST FAILED: ' . $contacts->getException()->getMessage() . PHP_EOL;
}
*/
