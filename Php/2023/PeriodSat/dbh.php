<?php  // dbh.php
declare(strict_types=1);

class DbHandle {
    private function __construct() {
    }

    public static function get() {
        static $dbh = null;
        if (null === $dbh) {
            $host = "localhost";
            $dbname = "tech_rdb";
            $username = "tech_rdb_u";
            $password = "tech_rdb_p";

            $dsn = "mysql:dbname={$dbname};host={$host};charset=utf8mb4";
            $options = [
                // 必須
                PDO::ATTR_EMULATE_PREPARES => false,  // エミュレート無効
                PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,  // 複文無効
                // お好み
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // カラム名だけの配列にする
            ];

            try {
                $dbh = new PDO($dsn, $username, $password, $options);
            } catch(PDOException $e) {
                echo "into catch <br>\n";
                echo $e->getMessage();
                return ;
            }
        }
        return $dbh;
    }
}
/*
$dbh = DbHandle::get();
var_dump($dbh);
$dbh2 = DbHandle::get();
var_dump($dbh2);
*/
