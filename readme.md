# Translate

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

trong infoym, trước khi cài đặt hãy chạy trước 2 câu lệnh để public localization
``` bash
php artisan infyom:publish --localized 
php artisan infyom.publish:layout --localized 
```

Via Composer

``` bash
composer require thinhpd/translate
```
Run command
``` bash
php artisan vendor:publish --provider="Thinhpd\Translate\TranslateServiceProvider"
```

Add code in Kernel in $middlewareGroups 'web'
``` bash
\App\Http\Middleware\Localization::class,
```

Add route in routes/web.php
``` bash
Route::get('lang/{lang}', 'LangController@changeLang')->name('lang');
```

Create change html : add code in html
``` bash
           <li style="width: 50px;">
                            <a href="{{ route('lang',['lang' => 'vi']) }}" >VI
                            </a>
                        </li>
                        <li style="width: 50px;">
                            <a href="{{ route('lang',['lang' => 'en']) }}"  >EN
                            </a>
                        </li>
```
## Usage

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [author name][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/thinhpd/translate.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/thinhpd/translate.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/thinhpd/translate/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/thinhpd/translate
[link-downloads]: https://packagist.org/packages/thinhpd/translate
[link-travis]: https://travis-ci.org/thinhpd/translate
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/thinhpd
[link-contributors]: ../../contributors
