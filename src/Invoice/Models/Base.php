<?php

namespace Traimmu\MfCloud\Invoice\Models;

use ArrayAccess;
use JsonSerializable;

class Base implements ArrayAccess, JsonSerializable
{
    protected $fields;

    protected $attributes;

    public function __construct(array $params, $api)
    {
        $this->attributes = $params;
        $this->api = $api;
    }

    public function __get($field)
    {
        if (! in_array($field, $this->fields, true)) {
            throw new \Exception('no such attribute');
        }

        return $this->offsetGet($field);
    }

    public function update(array $params)
    {
        $this->attributes = $this->api->update($this->id, $params);

        return $this;
    }

    public function jsonSerialize()
    {
        return json_encode($this->attributes);
    }

    public function toJson()
    {
        return $this->jsonSerialize();
    }

    public function toArray()
    {
        return $this->attributes;
    }

    public function offsetGet($offset) {
        return $this->attributes[$offset] ?? null;
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->attributes[] = $value;
        } else {
            $this->attributes[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->attributes[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->attributes[$offset]);
    }
}
