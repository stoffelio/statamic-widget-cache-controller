<?php

namespace Stoffelio\CacheController;

use Statamic\Providers\AddonServiceProvider;
use Stoffelio\CacheController\Widgets\CacheController;

class ServiceProvider extends AddonServiceProvider
{
    protected $viewNamespace = 'stoffelio';

    protected $widgets = [
        CacheController::class
    ];
}
