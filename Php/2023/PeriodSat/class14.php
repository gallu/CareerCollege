<?php  // class14.php

class Hoge {
    public const NUM = 123;

    public function p() {
        echo "class is " , $this::class , "<br>\n";
        echo "Hoge::NUM " , Hoge::NUM , "<br>\n";
        echo "self::NUM " , self::NUM , "<br>\n";
        echo "static::NUM " , static::NUM , "<br>\n";
    }
}

class Foo extends Hoge {
    public const NUM = 456;

    public function p() {
        echo "class is " , $this::class , "<br>\n";
        echo "Foo::NUM " , Foo::NUM , "<br>\n";
        echo "self::NUM " , self::NUM , "<br>\n";
        echo "static::NUM " , static::NUM , "<br>\n";
        echo "<br>\n";
        parent::p();
    }
}
$obj = new Hoge();
$obj->p();

$obj2 = new Foo();
$obj2->p();
