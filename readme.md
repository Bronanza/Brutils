# Brutils

PHP common utilities with laravel support.


## Installation
Add the following to `composer.json`. Then run `composer update`
```
"bronanza/brutils": "dev-master"
```


### **[Optional]
For laravel support, open `config/app.php` and register service provider to the `providers` array
```
Bronanza\Brutils\ServiceProvider::class
```

In the same config file `config/app.php` add the following to the aliases array
```
NumberFormatter => Bronanza\Brutils\Number\FormatterFacade::class,
CurrencyFormatter => Bronanza\Brutils\Currency\FormatterFacade::class,
```

Run the command below to publish the package config file `config/brutils.php`
```
php artisan vendor:publish
```


## Quick Usage
### Formatter
```
$formatter = new \Bronanza\Brutils\Number\Formatter(0, ',', '.');
$formatter->format(10000) === '10.000';

$currencyFormatter = new \Bronanza\Brutils\Currency\Formatter($formatter, '$');
$formatter->format(10000) === '$10.000';

// Or if you've registered the facades (config based on config/brutils.php)
NumberFormatter::format(10000) === '10.000';
CurrencyFormatter::format(10000) === '$10.000';
```

## License
MIT

![Yeay](https://media.giphy.com/media/rEbJjSjoS8qYM/giphy.gif)
