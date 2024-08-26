<?php  // class13.php

class Hoge {
    //
    private int $num;
    private string $str;
    //
    public function __construct(int $i, string $s) {
        $this->num = $i;
        $this->str = $s;

        // return null;

        throw new RuntimeException("invalid error");
    }
}

try {
    $obj = new Hoge(999, "str");
    var_dump($obj);
} catch (Exception $e) {
    echo $e->getMessage() , "<br>";
}
