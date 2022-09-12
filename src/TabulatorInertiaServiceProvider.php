<?php

namespace FmTod\LaravelTabulatorInertia;

use FmTod\LaravelTabulator\TabulatorTable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\ServiceProvider;
use Inertia\Response;

class TabulatorInertiaServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        TabulatorTable::macro(
            name: 'inertia',
            macro: static function (string $component, array $props = []): Response|JsonResponse {
                return app(static::class)->render($component, $props, InertiaRenderer::class);
            }
        );
    }
}
