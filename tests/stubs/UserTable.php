<?php

namespace FmTod\LaravelTabulatorInertia\Tests\stubs;

use FmTod\LaravelTabulator\Facades\Tabulator;
use FmTod\LaravelTabulator\Helpers\Column;
use FmTod\LaravelTabulator\Helpers\TabulatorConfig;
use FmTod\LaravelTabulator\TabulatorTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Collection;

class UserTable extends TabulatorTable
{
    public function config(): TabulatorConfig
    {
        return Tabulator::config();
    }

    public function query(): Builder|Model
    {
        return User::query();
    }

    public function columns(): Collection|Model|array|string
    {
        return [
            Column::make('id'),
            Column::make('name'),
        ];
    }
}
