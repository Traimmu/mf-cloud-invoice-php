<?php

namespace Traimmu\MfCloud\Invoice\Api;

use Traimmu\MfCloud\Invoice\Client;
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
     * Get one of the models from the repository.
     *
     * TODO: add limitation to api request.
     */
    public function first()
    {
        return $this->all()->first();
    }

    /*
     * Find a model by its primary key.
     */
    public function find(string $id, array $params = [])
    {
        return new $this->model(
            $this->client->get($this->path.'/'.$id, $params),
            $this
        );
    }

    /*
     * Get all of the models from the repository.
     */
    public function all() : Collection
    {
        $res = $this->client->get($this->path);
        return collect($res[$this->path])->map(function ($attributes) {
            return new $this->model($attributes, $this);
        });
    }

    /*
     * Save a new model and return the instance.
     */
    public function create(array $params = [])
    {
        $response = $this->client->post($this->path, $this->buildBody($params));
        return new $this->model($response, $this);
    }

    /*
     * Update a record in the repository.
     */
    public function update(string $id, array $params = [])
    {
        $response = $this->client->put(
            $this->path.'/'.$id,
            $this->buildBody($params)
        );

        return new $this->model($response, $this);
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
