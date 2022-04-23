<?php

namespace Maulvi67\LaravelExamplePackage\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Maulvi67\LaravelExamplePackage\LaravelExamplePackageServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Maulvi67\\LaravelExamplePackage\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelExamplePackageServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-example-package_table.php.stub';
        $migration->up();
        */
    }
}
