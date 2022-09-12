<?php

namespace FmTod\LaravelTabulatorInertia;

use FmTod\LaravelTabulator\TabulatorTable;
use Illuminate\Http\JsonResponse;
use Inertia\Response;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TabulatorInertiaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('laravel-tabulator-inertia');
    }

    public function packageBooted(): void
    {
        TabulatorTable::macro(
            name: 'inertia',
            macro: static function (string $component, array $props = []): Response|JsonResponse {
                return app(static::class)->render($component, $props, InertiaRenderer::class);
            }
        );
    }
}
