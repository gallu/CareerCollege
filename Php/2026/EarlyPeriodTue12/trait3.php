<?php  // trait3.php
declare(strict_types=1);

trait HogeTrait {
    private int $num;

    protected function pFunc(int $num) {
        $this->num = $num;
    }
    public function func(int $num): int {
        return $num * 2;
    }
}

$obj = new HogeTrait(); // Fatal error: Uncaught Error: Cannot instantiate trait HogeTrait in

