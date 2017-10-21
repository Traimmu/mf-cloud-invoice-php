<?php

namespace Traimmu\MfCloud\Invoice\Misc;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{

    protected static function getFacadeAccessor()
    {
        return 'traimmu.mfcloud.invoice';
    }

}
