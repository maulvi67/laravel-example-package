<?php

namespace Maulvi67\LaravelExamplePackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Maulvi67\LaravelExamplePackage\Commands\LaravelExamplePackageCommand;

class LaravelExamplePackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-example-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-example-package_table')
            ->hasCommand(LaravelExamplePackageCommand::class);
    }
}
