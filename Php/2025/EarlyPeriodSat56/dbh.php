<?php  // dbh.php
declare(strict_types=1);

class Dbh {
    //
    public static function getDbh(): \PDO|null {
        static $dbh = null;
        if ($dbh === null) {
            // 本来はconfigから
            $system = 'mysql';
            $host = 'localhost';
            $charset = 'utf8mb4';
            $db_name='ec_sample';
            $user = "ec_sample_user";
            $pass = "ec_sample_pass";
            //
            $dsn = "{$system}:dbname={$db_name};host={$host};charset={$charset}";
            //
            $options = [
                // セキュリティ上必須
                PDO::ATTR_EMULATE_PREPARES => false,  // エミュレート無効
                PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,  // 複文無効
                // お好みで
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // データ取得モード
            ];

            try {
                $dbh = new PDO($dsn, $user, $pass, $options);
            } catch (PDOException $e) {
                // XXX
                echo $e->getmessage();
            }
        }

        return $dbh;
    }
}

// $dbh = Dbh::getDbh();
// var_dump($dbh);
