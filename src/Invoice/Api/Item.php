<?php

namespace Traimmu\MfCloud\Invoice\Api;

use Traimmu\MfCloud\Invoice\Api\Base;
use Traimmu\MfCloud\Invoice\Models\Item as Model;

class Item extends Base
{
    protected $baseName = 'item';

    protected $model = Model::class;

    protected $path = 'items';

    protected $allowedMethods = ['all', 'get', 'create', 'update', 'delete'];
}
