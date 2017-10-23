<?php

namespace Bronanza\Brutils\Number;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bronanza\Brutils\Number\Formatter
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
        return 'brutils.number.formatter';
    }
}
