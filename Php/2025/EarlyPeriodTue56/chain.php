<?php  // chain.php

class Hoge {
    public function func1(): static|null {
        echo __METHOD__ , "<br>";
        return $this;
    }
    public function func2(): static|null {
        echo __METHOD__ , "<br>";
        // return $this;
        return null;
    }
    public function func3(): static|null {
        echo __METHOD__ , "<br>";
        return $this;
    }
    public function get(): string {
        echo __METHOD__ , "<br>";
        return "fin";
    }
}

$r = (new Hoge())
        ?->func1()
        ?->func2()
        ?->func3()
        ?->get()
    ;
var_dump($r);
