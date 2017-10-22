<?php

use Bronanza\Utils\Currency\Formatter;
use Bronanza\Utils\Number\Formatter as NumberFormatter;

describe('Currency/Formatter', function () {
    describe('.format', function () {
        beforeEach(function () {
            $this->formatter = new Formatter('Rp', new NumberFormatter());
        });

        context('when using default config', function () {
            it('format currency', function () {
                $formatted = $this->formatter->format(10000);
                expect($formatted)->to->equal('Rp 10.000');
            });
        });
    });
});
