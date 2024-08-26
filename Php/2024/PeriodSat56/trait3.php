<?php  // trait3.php
declare(strict_types=1);

Trait HogeTrait {
    public function func() {
        echo __METHOD__ , "<br>";
    }
}

// $obj = new HogeTrait(); // Uncaught Error: Cannot instantiate trait HogeTrait 
// var_dump($obj);

