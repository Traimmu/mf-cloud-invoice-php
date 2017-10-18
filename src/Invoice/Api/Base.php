<?php

namespace MfCloud\Api;

use MfCloud\Client;
use Illuminate\Support\Collection;

class Base
{
    protected $client;

    /*
     * Return new api instance.
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /*
     * Get all of the models from the repository.
     */
    public function all(array $params = []) : Collection
    {
        $res = $this->client->get($this->path, $params);
        return new Collection($res[$this->path]);
    }

    /*
     * Find a model by its primary key.
     */
    public function find(string $id, array $params = []) : Collection
    {
        return new Collection($this->client->get($this->path.'/'.$id, $params));
    }

    /*
     * Save a new model and return the instance.
     */
    public function create(array $params = []) : Collection
    {
        return new Collection($this->client->post(
            $this->path,
            $this->buildBody($params)
        ));
    }

    /*
     * Update a record in the repository.
     */
    public function update(string $id, array $params = []) : bool
    {
        $this->client->put($this->path.'/'.$id, $this->buildBody($params));

        return true;
    }

    /*
     * Delete a record in the repository.
     */
    public function delete(string $id) : bool
    {
        $this->client->delete($this->path.'/'.$id);

        return true;
    }

    /*
     * Build request body.
     */
    protected function buildBody(array $params) : array
    {
        return [
            'body' => json_encode([
                $this->baseName => $params
            ])
        ];
    }

}
