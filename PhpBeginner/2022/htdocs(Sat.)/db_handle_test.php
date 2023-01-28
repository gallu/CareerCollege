<?php  // db_handle_test.php

class Db {
    public static function getHandle() {
        // $dbh = new stdClass();
        static $dbh = null;
        if (null === $dbh) {
            $dbh = new stdClass();
        }
        return $dbh;
    }
}

//
$dbh = Db::getHandle();
var_dump($dbh);
//
$dbh = Db::getHandle();
var_dump($dbh);
