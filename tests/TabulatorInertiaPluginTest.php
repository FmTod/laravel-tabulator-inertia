<?php

use FmTod\LaravelTabulatorInertia\Tests\stubs\UserTable;
use Inertia\Response;

it('returns inertia response', function () {
    $response = UserTable::inertia('ExampleComponent');

    expect($response)->toBeInstanceOf(Response::class);
});
