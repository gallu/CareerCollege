<?php  // nullsafe.php

class Hoge {
    public function t1() {
        echo __METHOD__ , "<br>";
        return $this;
    }
    public function t2() {
        echo __METHOD__ , "<br>";
        return null;
    }
    public function t3() {
        echo __METHOD__ , "<br>";
        return $this;
    }
}

$obj = new Hoge();
// $obj->t1()->t2()->t3();

$r = $obj->t1();
if ($r !== null) {
    $r = $r->t2();
    if ($r !== null) {
        $r = $r->t3();
    }
}

$obj?->t1()?->t2()?->t3();







