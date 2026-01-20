<?php  // DBConnection.php

class DBConnection {
    // 外部からのnewの禁止
    private function __construct() {
    }
    
    public static function getHndle(): PDO {
        static $dbh = null;
        if (null === $dbh) {
            // 本来はconfigから
            $host = 'localhost';
            $charset = 'utf8mb4';
            $db_name='game_rdb';
            $user = "game_rdb_u";
            $pass = "game_rdb_p";
            //
            $dsn = "mysql:dbname={$db_name};host={$host};charset={$charset}";
            $options = [
                // セキュリティ上必須
                PDO::ATTR_EMULATE_PREPARES => false,  // エミュレート無効
                PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,  // 複文無効
                // お好みで
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // データ取得モード
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // エラーが起きたら例外
            ];
            try {
                $dbh = new PDO($dsn, $user, $pass, $options);
            } catch (PDOException $e) {
                // XXX
                echo $e->getmessage();
                exit;
            }
        }
        return $dbh;
    }
}

//
/*
$dbh = DBConnection::getHndle();
$dbh2 = DBConnection::getHndle();
var_dump($dbh, $dbh2);
*/
