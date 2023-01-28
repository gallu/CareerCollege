<?php  // db_class_test.php

class Hoge {
    public static function getInstance() {
        /*
        $obj = new stdClass();
        */

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
$obj = Hoge::getInstance();
var_dump($obj);

