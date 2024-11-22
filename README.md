# This is my package filament-title-with-slug

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mstfkhazaal/filament-title-with-slug.svg?style=flat-square)](https://packagist.org/packages/mstfkhazaal/filament-title-with-slug)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mstfkhazaal/filament-title-with-slug/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mstfkhazaal/filament-title-with-slug/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/mstfkhazaal/filament-title-with-slug/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/mstfkhazaal/filament-title-with-slug/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mstfkhazaal/filament-title-with-slug.svg?style=flat-square)](https://packagist.org/packages/mstfkhazaal/filament-title-with-slug)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require mstfkhazaal/filament-title-with-slug
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-title-with-slug-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-title-with-slug-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-title-with-slug-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentTitleWithSlug = new Mstfkhazaal\FilamentTitleWithSlug();
echo $filamentTitleWithSlug->echoPhrase('Hello, Mstfkhazaal!');
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

- [mstfkhazaal](https://github.com/mstfkhazaal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
