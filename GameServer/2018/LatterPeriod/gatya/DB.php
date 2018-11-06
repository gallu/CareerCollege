<?php  // DB.php

class DB {
    //
    protected function __construct() {
    }
    //
    static public function getHandle() {
        static $obj = null;
        if (null === $obj) {
            // XXX 本来はconfigファイルとかに書いてある
            $dsn  = 'mysql:dbname=game_2018;host=localhost;charset=utf8mb4';
            $user = 'game_2018';
            $pass = 'game_2018';

            // MySQL固有の設定
            $opt = [
                // 静的プレースホルダを指定
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            //
            try {
                $obj = new PDO($dsn, $user, $pass, $opt);
            } catch (PDOException $e) {
                echo 'DB Connect error: ', $e->getMessage();
                exit;
            }
        }
        return $obj;
    }
}
/*
var_dump(DB::getHandle());
var_dump(DB::getHandle());
*/
