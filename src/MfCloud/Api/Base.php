<?php

namespace MfCloud\Api;

use MfCloud\Client;
use Illuminate\Support\Collection;

class Base
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function all(array $params = []) : Collection
    {
        return new Collection($this->client->get($this->path, $params));
    }
}

