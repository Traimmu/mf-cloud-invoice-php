<?php

namespace Traimmu\MfCloud\Invoice\Api;

use Traimmu\MfCloud\Invoice\Api\Base;
use Traimmu\MfCloud\Invoice\Models\Office as Model;

class Office extends Base
{
    protected $path = 'office';

    protected $model = Model::class;

    protected $baseName = 'office';

    protected $allowedMethods = ['first', 'update'];

    public function first() : Model
    {
        return new Model($this->client->get($this->path), $this);
    }

}
