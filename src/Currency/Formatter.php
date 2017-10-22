<?php

namespace Bronanza\Utils\Currency;

use Bronanza\Utils\Number\Formatter as NumberFormatter;


class Formatter {
    private $numberFormatter;

    public function __construct(NumberFormatter $numberFormatter) {
        $this->numberFormatter = $numberFormatter;
    }

    /**
     * Format the given number to a currency based on localization.
     *
     * @author Sendy Halim <sendyhalim93@gmail.com>
     * @param int|double $number
     * @return string
     */
    public function format($number, $currency = 'Rp')
    {
        $formattedNumber = $this->numberFormatter->format($number);

        return "{$symbol} {$formattedNumber}";
    }
}
