# Laravel Tabulator InertiaJS Plugin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fmtod/laravel-tabulator-inertia.svg?style=flat-square)](https://packagist.org/packages/fmtod/laravel-tabulator-inertia)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/fmtod/laravel-tabulator-inertia/run-tests?label=tests)](https://github.com/fmtod/laravel-tabulator-inertia/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/fmtod/laravel-tabulator-inertia/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/fmtod/laravel-tabulator-inertia/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/fmtod/laravel-tabulator-inertia.svg?style=flat-square)](https://packagist.org/packages/fmtod/laravel-tabulator-inertia)

Plugin for laravel-tabulator to render tables using inertia response factory.

## Installation

You can install the package via composer:

```bash
composer require fmtod/laravel-tabulator-inertia
```

## Usage

```php
$laravelTabulatorInertia = new FmTod\LaravelTabulatorInertia();
echo $laravelTabulatorInertia->echoPhrase('Hello, FmTod!');
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
