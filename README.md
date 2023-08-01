# Laravel Tabulator InertiaJS Plugin

Plugin for laravel-tabulator to render tables using inertia response factory.

## Installation

You can install the package via composer:

```bash
composer require fmtod/laravel-tabulator-inertia
```

## Usage

```php
UserTable::inertia('Pages/UserList', ['extra' => $extra])
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [FmTod](https://github.com/FmTod)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
