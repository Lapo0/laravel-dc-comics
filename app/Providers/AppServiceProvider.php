<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('links', [
            [
                'title' => 'CREA COMIC',
                'route' => 'comics.create',
            ],
            [
                'title' => 'COMICS',
                'route' => 'comics.index',
            ],
        ]);

        view()->share('buy_links', [
            [
                'image' => 'resources/img/buy-comics-digital-comics.png',
                'title' => 'DIGITAL COMICS',
            ],
            [
                'image' => 'resources/img/buy-comics-merchandise.png',
                'title' => 'DC MERCHANDISE',
            ],
            [
                'image' => 'resources/img/buy-comics-shop-locator.png',
                'title' => 'SUBSCRIPTION',
            ],
            [
                'image' => 'resources/img/buy-comics-subscriptions.png',
                'title' => 'COMIC SHOP LOCATOR',
            ],
            [
                'image' => 'resources/img/buy-dc-power-visa.svg',
                'title' => 'DC POWER VISA',
            ],
        ]);

    }
}
