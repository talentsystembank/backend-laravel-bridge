<?php

namespace App\Commons\Facades;

use Illuminate\Support\Facades\Facade;

if ( ! class_exists('App\Commons\Facades\FileHelper')) {
    class FileHelper extends Facade
    {
        // Disable facade caches
        protected static $cached = false;

        protected static function getFacadeAccessor(): string
        {
            return \App\Commons\FileHelper::class;
        }
    }
}
