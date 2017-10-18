<?php

namespace Traimmu\MfCloud\Invoice\Models;

use Traimmu\MfCloud\Invoice\Api\Office as Api;
use Traimmu\MfCloud\Invoice\Models\Base;

class Billing extends Base
{
    protected $fillable = [
        'name', 'zip', 'prefecture', 'address1', 'address2', 'tel', 'fax',
    ];
}
