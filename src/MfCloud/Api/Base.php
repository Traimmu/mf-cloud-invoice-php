<?php

namespace MfCloud\Api;

use MfCloud\Client;

class Base
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function all(array $params = [])
    {
        return $this->client->get($this->path, $params);
    }

    public function find(string $id, array $params = [])
    {
        return $this->client->get($this->path.'/'.$id, $params);
    }

    public function create(array $params = [])
    {
        return $this->client->post($this->path, $params);
    }

    public function update(string $id, array $params = [])
    {
        return $this->client->put($this->path.'/'.$id, $params);
    }


}

