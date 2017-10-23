<?php

namespace Bronanza\Brutils\Currency;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bronanza\Brutils\Currency\Formatter
 */
class FormatterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'brutils.currency.formatter';
    }
}
