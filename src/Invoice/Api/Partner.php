<?php

namespace Traimmu\MfCloud\Invoice\Api;

use Traimmu\MfCloud\Invoice\Api\Base;
use Traimmu\MfCloud\Invoice\Models\Partner as Model;

class Partner extends Base
{
    protected $baseName = 'partner';

    protected $model = Model::class;

    protected $path = 'partners';

    protected $allowedMethods = ['all', 'get', 'create', 'update', 'delete'];
}
