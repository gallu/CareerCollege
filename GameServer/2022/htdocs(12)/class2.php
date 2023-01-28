<?php  // class2.php

class Hoge {
    // クラス内変数( プロパティ )
    public $val = 0;
}

//
$object = new Hoge();
var_dump($object);
//
//$object の中にある val = "string";
$object->val = "string";
var_dump($object);
var_dump($object->val);

