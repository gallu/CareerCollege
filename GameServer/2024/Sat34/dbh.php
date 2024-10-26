<?php  // dbh.php
declare(strict_types=1);

class Db {
    // ここは本来configとかから取得する
    public static ?string $db_host = null;
    public static ?string $db_name = null;
    public static ?string $db_charset = null;
    public static ?string $username = null;
    public static ?string $password = null;

    public static function getDbh(): PDO {
        static $dbh = null;
        if ($dbh === null) {
            // ここは本来configとかから取得する
            $db_host = static::$db_host ?? "localhost";
            $db_name = static::$db_name ?? "ec_sample";
            $db_charset = static::$db_charset ?? "utf8mb4";
            $username = static::$username ?? "ec_sample_user";
            $password = static::$password ?? "ec_sample_pass";

            $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
            $options = [
                // セキュリティ上必須
                PDO::ATTR_EMULATE_PREPARES => false,  // エミュレート無効
                PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,  // 複文無効
                // お好みで
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];

            try {
                $dbh = new PDO($dsn, $username, $password, $options);
            } catch (PDOException $e) {
                // 本当はログとかに吐く
                echo $e->getmessage();
                exit;
            }
        }
        return $dbh;
    }
}
// $dbh = Db::getDbh();
// var_dump($dbh);
// $dbh = Db::getDbh();
// var_dump($dbh);
