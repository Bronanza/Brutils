<?php

use Bronanza\Brutils\Number\Formatter;

describe('Number/Formatter', function () {
    describe('.format', function () {
        beforeEach(function () {
            $this->formatter = new Formatter(0, ',', '.');
        });

        context('when using default config', function () {
            it('format number', function () {
                $formatted = $this->formatter->format(10000);
                expect($formatted)->to->equal('10.000');
            });
        });
    });
});
