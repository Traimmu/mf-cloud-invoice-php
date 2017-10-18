<?php

namespace Traimmu\MfCloud\Invoice\Models;

use Traimmu\MfCloud\Invoice\Models\Base;

class Item extends Base
{
    protected $fields = [
        'id', 'code', 'name', 'detail', 'unit_price', 'unit',
        'quantity', 'price', 'excise', 'created_at', 'updated_at',
    ];
}
