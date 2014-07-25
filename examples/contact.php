<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey  = '57838e0df8cb0c4bcce4d2c53485dffc';
$contact = new Service\Contact(new Client($apiKey));

/*
echo '-----------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - ADD CONTACT' . PHP_EOL;
echo '-----------------------------' . PHP_EOL;

$firstname = 'John';
$lastname  = 'Doe';
$phone     = '5555555555';
$email     = 'test@test.com';

if (($results = $contact->add($firstname, $lastname, $phone, null, $email)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'First Name: ' . $results->getFirstName() . PHP_EOL;
    echo 'Last Name: ' . $results->getLastName() . PHP_EOL;
    echo 'Email: ' . $results->getEmail() . PHP_EOL;
    echo 'Phone: ' . $results->getPhone() . PHP_EOL;
    echo 'Extension: ' . $results->getExtension() . PHP_EOL;
    echo 'Extra: ' . $results->getExtra1() . PHP_EOL;
    echo 'Groups: ' . $results->getGroups() . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $contact->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '-----------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - GET CONTACT' . PHP_EOL;
echo '-----------------------------' . PHP_EOL;

$contact_id = '116c5365-ab8f-4ade-8009-1c26c4455042';

if (($results = $contact->get($contact_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'First Name: ' . $results->getFirstName() . PHP_EOL;
    echo 'Last Name: ' . $results->getLastName() . PHP_EOL;
    echo 'Email: ' . $results->getEmail() . PHP_EOL;
    echo 'Phone: ' . $results->getPhone() . PHP_EOL;
    echo 'Extension: ' . $results->getExtension() . PHP_EOL;
    echo 'Extra: ' . $results->getExtra1() . PHP_EOL;
    echo 'Groups: ' . $results->getGroups() . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $contact->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '--------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - UPDATE CONTACT' . PHP_EOL;
echo '--------------------------------' . PHP_EOL;

$contact_id = '116c5365-ab8f-4ade-8009-1c26c4455042';
$firstname  = 'John';
$lastname   = 'Doe';
$phone      = '7777777777';
$email      = 'test@test.com';

if (($results = $contact->update($contact_id, $firstname, $lastname, $phone, null, $email)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'First Name: ' . $results->getFirstName() . PHP_EOL;
    echo 'Last Name: ' . $results->getLastName() . PHP_EOL;
    echo 'Email: ' . $results->getEmail() . PHP_EOL;
    echo 'Phone: ' . $results->getPhone() . PHP_EOL;
    echo 'Extension: ' . $results->getExtension() . PHP_EOL;
    echo 'Extra: ' . $results->getExtra1() . PHP_EOL;
    echo 'Groups: ' . $results->getGroups() . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $contact->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '--------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - DELETE CONTACT' . PHP_EOL;
echo '--------------------------------' . PHP_EOL;

$contact_id = '116c5365-ab8f-4ade-8009-1c26c4455042';

if (($results = $contact->delete($contact_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $contact->getException()->getMessage() . PHP_EOL;
}
*/
