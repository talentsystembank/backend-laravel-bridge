<?php

namespace App\Commons\Facades;

use Illuminate\Support\Facades\Facade;

if ( ! class_exists('App\Commons\Facades\SiteConfigHelper')) {
    class SiteConfigHelper extends Facade
    {
        // Disable facade caches
        protected static $cached = false;

        protected static function getFacadeAccessor(): string
        {
            return \App\Commons\SiteConfigHelper::class;
        }
    }
}
