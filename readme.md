# Translate

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require thinhpd/translate
```
Run command
``` bash
php artisan vendor:publish --provider="Thinhpd\Translate\TranslateServiceProvider"
```

Add code in Kernel in $middlewareGroups web
``` bash
\App\Http\Middleware\Localization::class,
```

Add route in routes/web.php
``` bash
Route::get('lang/{lang}', 'LangController@changeLang')->name('lang');
```