<?php  declare(strict_types=1); // e09.php

trait HogeTrait {
    public function output(string $no, string $name) {
        echo $no;
        echo $name;
    }
}

class Hoge {
    use HogeTrait;
}

$obj = new Hoge();
$obj->output('XXXXXXXXXXX', '古庄道明');

