<?php // Authentication.php

require_once('./DB.php');

class Authentication
{
    /**
     * ログイン
     */
    static public function isLogin($id, $pass){
        // ごく簡単なvalidate
        if ( ('' === $id)||('' === $pass) ) {
            return false;
        }

        // DBハンドルを取得する
        $dbh = DB::getHandle();
//var_dump($dbh); exit;

        // DBからIDとpasswordを取得する(SQL発行)
        // 準備された文(プリペアドステートメント)の作成
        $sql = 'SELECT * FROM users WHERE login_id = :login_id ;';
        $pre = $dbh->prepare($sql);
        // プレースホルダへの値のbind
        $pre->bindValue(':login_id', $id);
        // SQLの実行
        $r = $pre->execute();
        // データの取得
        $user = $pre->fetch( PDO::FETCH_ASSOC );
//var_dump($user); exit;

        // user_idがなければログイン不可
        if (false === $user) {
            return false;
        }
        // 入力のpassとDBのpassを比較する
        if (false === password_verify($pass, $user['password'])) {
            return false;
        }

        // 一致してたら
        unset($user['password']);
        unset($user['login_id']);
        static::$user = $user;
        return true;
    }

    //
    public static function getUser()
    {
        return static::$user;
    }
//
private static $user = null;
}
