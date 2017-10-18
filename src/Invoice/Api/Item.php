<?php

namespace MfCloud\Api;

use MfCloud\Api\Base;

class Item extends Base
{
    protected $baseName = 'item';

    protected $collectionKey = 'items';

    protected $path = 'items';

    protected $allowedMethods = ['all', 'get', 'create', 'update', 'delete'];
}
