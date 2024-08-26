<?php  // magic3.php

class Hoge {
    public function __invoke() {
        echo __METHOD__ , "<br>\n";
    }
}

$obj = new Hoge();
$obj();
