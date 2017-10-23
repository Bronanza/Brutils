<?php

namespace Bronanza\Brutils\Number;


class Formatter {
    private $thousandSeparator;
    private $decimalSeparator;
    private $precision;

    public function __construct($precision, $decimalSeparator, $thousandSeparator)
    {
        $this->precision = $precision;
        $this->decimalSeparator = $decimalSeparator;
        $this->thousandSeparator = $thousandSeparator;

    }

    /**
     * Format the given number with proper separator.
     *
     * @author Sendy Halim <sendyhalim93@gmail.com>
     * @param int|double $number
     * @return string
     */
    public function format($number)
    {
        return number_format(
            $number,
            $this->precision,
            $this->decimalSeparator,
            $this->thousandSeparator
        );
    }
}
