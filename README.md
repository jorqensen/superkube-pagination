![banner](https://banners.beyondco.de/Superkube%20Pagination.png?theme=light&packageManager=composer+require&packageName=jorqensen%2Fsuperkube-pagination&pattern=architect&style=style_1&description=Pagination+for+Superkube+CSS&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg&widths=200&heights=200)

## Installation

1. Require the package via your terminal.

```bash
$ composer require jorqensen/superkube-pagination
```

2. Set the pagination views in your `AppServiceProvider`.

```php
<?php
 
namespace App\Providers;
 
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('superkube-pagination::default');
        Paginator::defaultSimpleView('superkube-pagination::simple');
    }
}
```

4. If you're not using Laravel's auto package discovery, make sure you manually set the service provider in your `config/app.php`

```php
<?php

return [
    /*
    * Package Service Providers...
    */
    Jorqensen\SuperkubePagination\SuperkubePaginationServiceProvider::class,
];
```

## Publishing views

You can publish the pagination views using Artisan's `venor:publish` command.

```bash
$ php artisan vendor:publish --tag="superkube-pagination"
```

The views will be published to `/resources/views/vendor/superkube-pagination`.

## Support

This package currently supports the following Laravel versions:

- Laravel 8.x
- Laravel 9.x

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
