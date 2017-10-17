<?php

require __DIR__.'/../vendor/autoload.php';

use MfCloud\Client;

$client = new Client;

echo $client::BASE_URL;


