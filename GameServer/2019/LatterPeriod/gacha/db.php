<?php  // db.php

function get_dbh() {
    static $dbh = null;
    if (null === $dbh) {
        try {
            //
            $dbname = 'game_2019';
            $host   = 'localhost';
            $user   = 'game_2019';
            $pass   = 'game_2019';
            $dsn = "mysql:dbname={$dbname};host={$host};charset=utf8mb4";
            $option = [
                // 静的プレースホルダを指定
                PDO::ATTR_EMULATE_PREPARES => false,
                // 複文実行を禁止
                PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
            ];
            //
            $dbh = new PDO($dsn, $user, $pass, $option);
        } catch (PDOException $e) {
            // XXX とりあえず
            echo $e->getMessage();
            exit; // 場当たり
        }
    }
//var_dump($dbh);
    //
    return $dbh;
}
/*
var_dump( get_dbh() );
var_dump( get_dbh() );
var_dump( get_dbh() );
*/



