<?php

namespace Maulvi67\LaravelExamplePackage\Commands;

use Illuminate\Console\Command;

class LaravelExamplePackageCommand extends Command
{
    public $signature = 'laravel-example-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
