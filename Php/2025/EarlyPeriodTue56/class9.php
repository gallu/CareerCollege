<?php  // class9.php
declare(strict_types=1);

class Price {
    private int $num;
    
    public function __construct(int $num) {
        if ($num <= 0) {
            throw new RuntimeException("負の値はヤダ");
        }

        $this->num = $num;
    }
    public function getNum(): int {
        return $this->num;
    }
}

try {
    // $obj = new Price(-1);
    $obj = new Price(1);
} catch (RuntimeException $e) {
    echo $e->getMessage(), "<br>";
    return;
}

var_dump($obj);
