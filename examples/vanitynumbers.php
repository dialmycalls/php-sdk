<?php

require_once('../vendor/autoload.php');

use DialMyCalls\Client;
use DialMyCalls\Service;

$apiKey        = '57838e0df8cb0c4bcce4d2c53485dffc';
$vanitynumbers = new Service\VanityNumbers(new Client($apiKey));

echo '-------------------------------------' . PHP_EOL;
echo 'DIALMYCALLS.COM - LIST VANITY NUMBERS' . PHP_EOL;
echo '-------------------------------------' . PHP_EOL;

if (($results = $vanitynumbers->get()) !== false) {
    foreach ($results as $result) {
        echo 'ID: ' . $result->getId() . PHP_EOL;
        echo 'Phone: ' . $result->getPhone() . PHP_EOL;
        echo 'Status: ' . $result->getStatus() . PHP_EOL;
        echo 'Minutes Used: ' . $result->getMinutesUsed() . PHP_EOL;
        echo 'Minutes Allowed: ' . $result->getMinutesAllowed() . PHP_EOL;
        echo 'Voicemails New: ' . $result->getVoicemailsNew() . PHP_EOL;
        echo 'Voicemails Old: ' . $result->getVoicemailsOld() . PHP_EOL;
        echo 'Created At: ' . $result->getCreatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo 'Updated At: ' . $result->getUpdatedAt()->format('n/j/Y g:i A T') . PHP_EOL;
        echo '---' . PHP_EOL;
    }
} else {
    echo 'REQUEST FAILED: ' . $vanitynumbers->getException()->getMessage() . PHP_EOL;
}
