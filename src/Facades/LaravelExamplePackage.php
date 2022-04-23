<?php

namespace Maulvi67\LaravelExamplePackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Maulvi67\LaravelExamplePackage\LaravelExamplePackage
 */
class LaravelExamplePackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-example-package';
    }
}
