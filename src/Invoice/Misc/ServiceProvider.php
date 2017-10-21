<?php

namespace Traimmu\MfCloud\Invoice\Misc;

use Illuminate\Support\ServiceProvider as BaseProvider;
use Traimmu\MfCloud\Invoice\Client;

class ServiceProvider extends BaseProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('traimmu.mfcloud.invoice', function () {
            $secret = $this->app->config->get('services.mfcloud.secret');
            return new Client($secret);
        });
    }
}
