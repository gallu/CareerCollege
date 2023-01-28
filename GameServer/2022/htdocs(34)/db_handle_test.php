<?php  // db_handle_test.php

class Hoge {
    public static function getInstance() {
        //$obj = new stdClass();
        static $obj = null;
        if (null === $obj) {
            $obj = new stdClass();
        }
        return $obj;
    }
}
//
$obj = Hoge::getInstance();
var_dump($obj);
//
$obj2 = Hoge::getInstance();
var_dump($obj2);
//
$obj3 = Hoge::getInstance();
var_dump($obj3);





