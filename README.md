# Easy Filament Policies

[![Latest Version on Packagist](https://img.shields.io/packagist/v/desilva/filament-policies.svg?style=flat-square)](https://packagist.org/packages/desilva/filament-policies)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/caendesilva/filament-policies/run-tests.yml?branch=3.x&label=tests&style=flat-square)](https://github.com/caendesilva/filament-policies/actions?query=workflow%3Arun-tests+branch%3A3.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/caendesilva/filament-policies/Fix+PHP+Code+Styling.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/caendesilva/filament-policies/actions?query=workflow%3A"Fix+PHP+Code+Styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/desilva/filament-policies.svg?style=flat-square)](https://packagist.org/packages/desilva/filament-policies)

# Super simple policy pages for FilamentPHP v3 pages, for all your terms of service and privacy policy needs!

## Installation

You can install the package via composer:

```bash
composer require desilva/filament-policies
```

## Usage

Simply drop your Markdown policy files into `resources/markdown/policies`,
and the plugin will discover them as routes and turn them into super simple policy pages!

For example:

```bash
echo "Hello World!" > resources/markdown/policies/terms-of-service.md
```

Then, you can visit localhost:8000/terms-of-service, or whichever your app URL is.

## Customization

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
    //
];
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
