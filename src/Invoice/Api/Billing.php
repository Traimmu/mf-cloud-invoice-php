<?php

namespace Traimmu\MfCloud\Invoice\Api;

use Traimmu\MfCloud\Invoice\Api\Base;
use Traimmu\MfCloud\Invoice\Models\Billing as Model;

class Billing extends Base
{
    protected $baseName = 'billing';

    protected $model = Model::class;

    protected $path = 'billings';

    protected $allowedMethods = ['all', 'get', 'create', 'update', 'delete'];
}
