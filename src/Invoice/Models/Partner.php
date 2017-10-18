<?php

namespace Traimmu\MfCloud\Invoice\Models;

use Traimmu\MfCloud\Invoice\Models\Base;

class Partner extends Base
{
    protected $fields = [
        'id', 'code', 'name', 'name_kana', 'name_suffix', 'memo',
        'created_at', 'updated_at'
    ];
}
