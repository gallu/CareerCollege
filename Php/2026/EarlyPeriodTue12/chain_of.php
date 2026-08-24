<?php  // chain_of.php
declare(strict_types=1);

class Hoge {
    public function method1(): ?static {
        echo __METHOD__ , "<br>";
        return $this;
    }
    public function method2(): ?static {
        echo __METHOD__ , "<br>";
        // return $this;
        return null;
    }
    public function method3(): ?static {
        echo __METHOD__ , "<br>";
        return $this;
    }

    public function execute(): int {
        echo __METHOD__ , "<br>";
        return random_int(0, 9999);
    }
}

// $r = (new Hoge())
$r = new Hoge() // PHP 8.4以降
        ?->method1()
        ?->method2()
        ?->method3()
        ?->execute();
var_dump($r);


