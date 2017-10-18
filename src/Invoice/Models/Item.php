<?php

namespace Traimmu\MfCloud\Invoice\Models;

use Traimmu\MfCloud\Invoice\Models\Base;

class Item extends Base
{
    protected $fillable = [
        'name', 'zip', 'prefecture', 'address1', 'address2', 'tel', 'fax',
    ];
}
