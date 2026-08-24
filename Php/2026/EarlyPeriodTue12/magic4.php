<?php  // magic4.php
declare(strict_types=1);

class Hoge {
    public function __invoke( ...$values): void {
        var_dump($values);
        echo "<br>";
    }
}

$obj = new Hoge();
$obj();
$obj(1, 2, 3);
