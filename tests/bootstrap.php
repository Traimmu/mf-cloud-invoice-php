<?php

require __DIR__.'/../vendor/autoload.php';

use MfCloud\Client;
use MfCloud\Api\Partner;

use Illuminate\Support\Collection;

$client = new Client('hoge');

(new Partner($client))->all();

