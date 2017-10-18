<?php

namespace MfCloud\Api;

use MfCloud\Api\Base;

class Billing extends Base
{
    protected $baseName = 'billing';

    protected $collectionKey = 'billings';

    protected $path = 'billings';

    protected $allowedMethods = ['all', 'get', 'create', 'update', 'delete'];
}
