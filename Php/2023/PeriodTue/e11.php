<?php  declare(strict_types=1); // e11.php

class Exam11 {
    public function __construct(
        private int $a, // 500円玉
        private int $b, // 100円玉
        private int $c, // 50円玉
        private int $x,
    ) {
        /*
        a, b, c ともに 0以上50以下 の整数
        a + b + c は、1以上
        x は、 50 以上 20000 以下、かつ50の倍数
        */
        $this->validate($a, $b, $c, $d);
    }
    private function validate($a, $b, $c, $d) {
        if (false) {
            throw new \Exception("");
        }
    }

    public function calculateCombinations(): int {
        $count = 0;
        for ($i = 0; $i <= min($this->a, $this->x / 500); $i++) {
            for ($j = 0; $j <= min($this->b, ($this->x - $i * 500) / 100); $j++) {
                $k = ($this->x - $i * 500 - $j * 100) / 50;
                if ($k <= $this->c && $k == intval($k)) {
                    $count++;
                }
            }
        }
        return $count;
    }

    public function calculateCombinations(): int {
        $count = 0;
        for ($i = 0; $i <= $this->a; $i++) {
            for ($j = 0; $j <= $this->b; $j++) {
                for ($k = 0; $k <= $this->c; $k++) {
                    $total = $i * 500 + $j * 100 + $k * 50;
                    if ($total == $this->x) {
                        $count++;
                    }
                }
            }
        }
        return $count;
    }
}

$obj = new Exam11(1, 2, 3, 4);
var_dump($obj);
