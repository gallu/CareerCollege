<?php  // serialize3.php
declare(strict_types=1);

class Hoge {
    public function __construct(
        private int $num,
        private string $name,
    ){}

    public function __sleep(): array {
        echo __METHOD__, "<br>\n";
        return [
            "num",
            // "name",
        ];
    }
    public function __wakeup(): void {
        echo __METHOD__, "<br>\n";
    }
}
//
$obj = new Hoge(123, "hogera");
var_dump($obj);
echo "<br>\n";

$s = serialize($obj);
var_dump($s);
echo "<br>\n";

$obj2 = unserialize($s);
var_dump($obj2);
echo "<br>\n";
