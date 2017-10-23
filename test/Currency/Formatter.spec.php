<?php

use Bronanza\Brutils\Currency\Formatter;
use Bronanza\Brutils\Number\Formatter as NumberFormatter;

describe('Currency/Formatter', function () {
    describe('.format', function () {
        beforeEach(function () {
            $this->formatter = new Formatter(
                new NumberFormatter(0, ',', '.'),
                'Rp'
            );
        });

        context('when using default config', function () {
            it('format currency', function () {
                $formatted = $this->formatter->format(10000);
                expect($formatted)->to->equal('Rp10.000');
            });
        });
    });
});
