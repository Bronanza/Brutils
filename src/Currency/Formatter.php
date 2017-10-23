<?php

namespace Bronanza\Brutils\Currency;

use Bronanza\Brutils\Number\Formatter as NumberFormatter;


class Formatter {
    private $currency;
    private $numberFormatter;

    public function __construct(NumberFormatter $numberFormatter, $currency) {
        $this->numberFormatter = $numberFormatter;
        $this->currency = $currency;
    }

    /**
     * Format the given number to a currency based on localization.
     *
     * @author Sendy Halim <sendyhalim93@gmail.com>
     * @param int|double $number
     * @return string
     */
    public function format($number)
    {
        $formattedNumber = $this->numberFormatter->format($number);

        return "{$this->currency} {$formattedNumber}";
    }
}
