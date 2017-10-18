<?php

namespace Traimmu\MfCloud\Invoice\Models;

use Traimmu\MfCloud\Invoice\Models\Base;

class Office extends Base
{
    protected $fillable = [
        'name', 'zip', 'prefecture', 'address1', 'address2', 'tel', 'fax',
    ];

    public function update(array $params)
    {
        return $this->api->update('', $params);
    }
}
