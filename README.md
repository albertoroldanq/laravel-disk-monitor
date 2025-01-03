# Monitor metrics of Laravel disk

[![Latest Version on Packagist](https://img.shields.io/packagist/v/albertoroldanq/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/albertoroldanq/laravel-disk-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/albertoroldanq/laravel-disk-monitor/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/albertoroldanq/laravel-disk-monitor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/albertoroldanq/laravel-disk-monitor/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/albertoroldanq/laravel-disk-monitor/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/albertoroldanq/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/albertoroldanq/laravel-disk-monitor)

## Installation

You can install the package via composer:

```bash
composer require albertoroldanq/laravel-disk-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="disk-monitor-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="disk-monitor-config"
```

This is the contents of the published config file:

```php
return [
    'disk_names' => [
        'local',
    ],
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="disk-monitor-views"
```

And you can add a route to load the view by using the package macro:
```php
Route::diskMonitor('disk-monitor');
```

## Usage

```php
$diskMonitor = new Albertoroldanq\DiskMonitor();
echo $diskMonitor->echoPhrase('Hello, Albertoroldanq!');
```

## Testing

```bash
composer test
```

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alberto Roldan](https://github.com/albertoroldanq)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
