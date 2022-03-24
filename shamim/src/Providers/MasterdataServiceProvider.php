<?php

namespace Shamim\Masterdata\Providers;

use Illuminate\Support\ServiceProvider;


class MasterdataServiceProvider extends ServiceProvider
{


    public function register()
    {
    }


    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');

    }
}
