# Logaudit

[![Build Status](https://travis-ci.org/jagadeshanh/logaudit.svg?branch=master)](https://travis-ci.org/jagadeshanh/logaudit)
[![StyleCI](https://github.styleci.io/repos/140619305/shield?branch=master)](https://github.styleci.io/repos/140619305/shield?branch=master)
[![Packagist](https://img.shields.io/packagist/v/jagadeshanh/logaudit.svg)](https://packagist.org/packages/jagadeshanh/logaudit)
[![Packagist](https://poser.pugx.org/jagadeshanh/logaudit/d/total.svg)](https://packagist.org/packages/jagadeshanh/logaudit)
[![Packagist](https://img.shields.io/packagist/l/jagadeshanh/logaudit.svg)](https://packagist.org/packages/jagadeshanh/logaudit)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require jagadeshanh/logaudit
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Jagadeshanh\Logaudit\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Jagadeshanh\Logaudit\Facades\Logaudit::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Jagadeshanh\Logaudit\ServiceProvider" --tag="config"
```

## Usage

Go to Handler.php and fire following event inside render function
```$xslt
event(new ExceptionOccurred($exception));
```


## Security

If you discover any security related issues, please email 
instead of using the issue tracker.
