<?php  // trait2.php

trait HogeTrait {
    // ok
    private function getTaxRat(): float {
        return 0.10;
    }

    // ok
    private float $rate = 0.10;
}

// // Fatal error: Uncaught Error: Cannot instantiate trait HogeTrait in
// $obj = new HogeTrait(); 
