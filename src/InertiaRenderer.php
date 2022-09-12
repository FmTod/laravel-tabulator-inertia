<?php

namespace FmTod\LaravelTabulatorInertia;

use FmTod\LaravelTabulator\Contracts\RendersTable;
use FmTod\LaravelTabulator\TabulatorTable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\JsonResponse;
use Inertia\Inertia;
use Inertia\Response;

class InertiaRenderer implements RendersTable
{
    public function render(TabulatorTable $table, string $component, Arrayable|array $props = []): Response|JsonResponse
    {
        if (! $table->request->hasHeader('X-Inertia')
            && ($table->request->ajax() || $table->request->wantsJson())) {
            return response()->json($table->json());
        }

        return Inertia::render($component, $table->data($props));
    }
}
