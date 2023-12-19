<?php  // dbh.php
declare(strict_types=1);

class DbHandle {
    private function __construct() {
    }

    //
    public static function get(): PDO|null {
        static $dbh = null;
        if (null === $dbh) {
            $host = "localhost";
            $dbname = "tech_rdb";
            $user = "tech_rdb_u";
            $pass = "tech_rdb_p";

            $dsn = "mysql:host={$host};dbname={$dbname};charset=utf8mb4";
            $options = [
                // 必須
                PDO::ATTR_EMULATE_PREPARES => false,  // エミュレート無効
                PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,  // 複文無効
                // お好み
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];

            try {
                $dbh = new PDO($dsn, $user, $pass, $options);
            } catch(PDOException $e) {
                echo "into catch <br> \n";
                echo $e->getMessage();
                return null;
            }
        }

        return $dbh;
    }
}
//
/*
$dbh = DbHandle::get();
var_dump($dbh);

$dbh = DbHandle::get();
var_dump($dbh);
*/
