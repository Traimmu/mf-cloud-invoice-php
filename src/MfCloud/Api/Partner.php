<?php

namespace MfCloud\Api;

use MfCloud\Api\Base;

class Partner extends Base
{
    protected $baseName = 'partner';

    protected $collectionKey = 'partners';

    protected $path = 'partners';

    protected $allowedMethods = ['all', 'get', 'create', 'update', 'delete'];
}
