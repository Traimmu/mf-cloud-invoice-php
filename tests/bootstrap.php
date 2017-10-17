<?php

require __DIR__.'/../vendor/autoload.php';

use MfCloud\Client;
use MfCloud\Api\Partner;
use Dotenv\Dotenv;

(new Dotenv(__DIR__.'/../'))->load();

$client = new Client(env('MFCLOUD_INVOICE_API_TOKEN'));

(new Partner($client))->all();

