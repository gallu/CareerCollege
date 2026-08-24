<?php  // trait4.php
declare(strict_types=1);

trait HogeTrait {
    public function func1(): void {
        echo __METHOD__, "<br>";
    }
    private function priFunc(): void {
        echo __METHOD__, "<br>";
    }

    private int $num;
}

// Fatal error: Uncaught Error: Cannot instantiate trait HogeTrait in
$obj = new HogeTrait();
