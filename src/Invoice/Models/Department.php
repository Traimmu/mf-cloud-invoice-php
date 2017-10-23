<?php

namespace Traimmu\MfCloud\Invoice\Models;

use Traimmu\MfCloud\Invoice\Models\Base;

class Department extends Base
{
    protected $fields = [
        'id', 'name', 'zip', 'tel', 'prefecture', 'address1', 'address2',
        'person_title', 'person_name', 'email', 'cc_emails',
        'created_at', 'updated_at',
    ];

    public function departments()
    {
        return collect($this['departments']);
    }
}
