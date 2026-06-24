<?php  // exception3.php
declare(strict_types=1);

readonly class Hoge {
    public int $price;
    public function __construct(int $price) {
        if ($price < 0) {
            throw new RuntimeException("価格は正の整数でどうぞ");
        }
        $this->price = $price;
    }
}

try {
    $obj = new Hoge(-1);
} catch(RuntimeException $e) {
    echo $e->getMessage(), "<br>";
}
echo "fin.";