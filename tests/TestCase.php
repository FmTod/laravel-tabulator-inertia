<?php

namespace FmTod\LaravelTabulatorInertia\Tests;

use FmTod\LaravelTabulator\TabulatorServiceProvider;
use FmTod\LaravelTabulatorInertia\TabulatorInertiaServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'FmTod\\LaravelTabulatorInertia\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app): array
    {
        return [
            TabulatorInertiaServiceProvider::class,
            TabulatorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
    }
}
