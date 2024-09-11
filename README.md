# Monitor metrics of Laravel disk

[![Latest Version on Packagist](https://img.shields.io/packagist/v/albertoroldanq/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/albertoroldanq/laravel-disk-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/albertoroldanq/laravel-disk-monitor/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/albertoroldanq/laravel-disk-monitor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/albertoroldanq/laravel-disk-monitor/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/albertoroldanq/laravel-disk-monitor/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/albertoroldanq/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/albertoroldanq/laravel-disk-monitor)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require albertoroldanq/laravel-disk-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-disk-monitor-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-disk-monitor-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-disk-monitor-views"
```

## Usage

```php
$diskMonitor = new AlbertoRoldanQ\DiskMonitor();
echo $diskMonitor->echoPhrase('Hello, AlbertoRoldanQ!');
```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alberto Roldan](https://github.com/albertoroldanq)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
