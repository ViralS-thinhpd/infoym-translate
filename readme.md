# Translate

Translatable for infoym en -> vietnam

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