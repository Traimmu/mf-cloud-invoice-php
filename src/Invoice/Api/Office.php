<?php

namespace MfCloud\Api;

use MfCloud\Api\Base;
use Illuminate\Support\Collection;

class Office extends Base
{
    protected $path = 'office';

    protected $allowedMethods = ['get', 'update'];

    public function get() : Collection
    {
        return new Collection($this->client->get($this->path));
    }

    /*
     * TODO: 継承できるようにする
     */
    public function updateSelf(array $params = []) : Collection
    {
        return new Collection($this->client->put($this->path, $this->buildUrl($params)));
    }
}
