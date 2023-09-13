# Super simple policy pages for FilamentPHP v3 pages, for all your terms of service and privacy policy needs!

[![Latest Version on Packagist](https://img.shields.io/packagist/v/desilva/filament-policies.svg?style=flat-square)](https://packagist.org/packages/desilva/filament-policies)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/desilva/filament-policies/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/desilva/filament-policies/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/desilva/filament-policies/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/desilva/filament-policies/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/desilva/filament-policies.svg?style=flat-square)](https://packagist.org/packages/desilva/filament-policies)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require desilva/filament-policies
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-policies-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-policies-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-policies-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentPolicies = new Desilva\FilamentPolicies();
echo $filamentPolicies->echoPhrase('Hello, Desilva!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Caen De Silva](https://github.com/desilva)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
