<?php

namespace Traimmu\MfCloud\Invoice\Misc;

use Illuminate\Support\Facades\Facade;

class InvoiceFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'traimmu.mfcloud.invoice';
    }

}
