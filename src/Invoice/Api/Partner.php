<?php

namespace Traimmu\MfCloud\Invoice\Api;

use Traimmu\MfCloud\Invoice\Api\Base;

class Partner extends Base
{
    protected $baseName = 'partner';

    protected $collectionKey = 'partners';

    protected $path = 'partners';

    protected $allowedMethods = ['all', 'get', 'create', 'update', 'delete'];
}
