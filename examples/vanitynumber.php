<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey       = '57838e0df8cb0c4bcce4d2c53485dffc';
$vanitynumber = new Service\VanityNumber(new Client($apiKey));

/*
echo '-----------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - GET VANITY NUMBER' . PHP_EOL;
echo '-----------------------------------' . PHP_EOL;

$vanitynumber_id = 'c2257b4b-d846-4768-810a-30e2d4878486';

if (($results = $vanitynumber->get($vanitynumber_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
    echo 'Phone: ' . $results->getPhone() . PHP_EOL;
    echo 'Status: ' . $results->getStatus() . PHP_EOL;
    echo 'Minutes Used: ' . $results->getMinutesUsed() . PHP_EOL;
    echo 'Minutes Allowed: ' . $results->getMinutesAllowed() . PHP_EOL;
    echo 'Voicemails New: ' . $results->getVoicemailsNew() . PHP_EOL;
    echo 'Voicemails Old: ' . $results->getVoicemailsOld() . PHP_EOL;
    echo 'Created At: ' . $results->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
    echo 'Updated At: ' . $results->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $vanitynumber->getException()->getMessage() . PHP_EOL;
}
*/

/*
echo '--------------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - DELETE VANITY NUMBER' . PHP_EOL;
echo '--------------------------------------' . PHP_EOL;

$vanitynumber_id = 'c2257b4b-d846-4768-810a-30e2d4878486';

if (($results = $vanitynumber->delete($vanitynumber_id)) !== false) {
    echo 'ID: ' . $results->getId() . PHP_EOL;
} else {
    echo 'REQUEST FAILED: ' . $vanitynumber->getException()->getMessage() . PHP_EOL;
}
*/
