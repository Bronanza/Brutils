<?php

namespace Bronanza\Brutils;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Bronanza\Brutils\Number\Formatter as NumberFormatter;
use Bronanza\Brutils\Currency\Formatter as CurrencyFormatter;


class ServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config.php' => config_path('brutils.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfig();
        $this->registerNumberFormatter();

    }

    /**
     * Register number formatter.
     *
     * @return void
     */
    protected function registerNumberFormatter()
    {
        $this->app->bind('brutils.number.formatter', function ($app) {
            return new NumberFormatter(
                Config::get('brutils.number.formatter.precision'),
                Config::get('brutils.number.formatter.decimalSeparator'),
                Config::get('brutils.number.formatter.thousandSeparator')
            );
        });
    }

    /**
     * Register currency formatter.
     *
     * @return void
     */
    protected function registerCurrencyFormatter()
    {
        $this->app->bind('brutils.currency.formatter', function ($app) {
            return new CurrencyFormatter(
                $this->app->make('brutils.number.formatter'),
                Config::get('brutils.currency.formatter.symbol'),
            );
        });
    }

    /**
     * Merges user's and brutils' configs.
     *
     * @return void
     */
    private function mergeConfig()
    {
        $this->mergeConfigFrom(__DIR__.'/config.php', 'brutils');
    }
}
