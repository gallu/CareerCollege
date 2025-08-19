<?php  // interface2.php

interface IHoge {
    public function calTax(int $price): int;

    /*
    // Fatal error: Interface function IHoge::getTax() cannot contain body
    public function getTax(): int {
        return 123;
    }

    // Fatal error: Access type for interface method IHoge::getTaxRat() must be public
    private function getTaxRat(): float;

    // Fatal error: Interfaces may not include properties
    // Fatal error: Interfaces may only include hooked properties 
    public float $taxRate = 0.10;

    */
}

