<?php

namespace Traimmu\MfCloud\Invoice\Models;

use Traimmu\MfCloud\Invoice\Models\Base;

class Partner extends Base
{
    protected $fields = [
        'id', 'code', 'name', 'name_kana', 'name_suffix', 'memo', 'departments',
        'created_at', 'updated_at'
    ];

    public function departments()
    {
        return collect($this['attributes']['departments']);
    }
}
