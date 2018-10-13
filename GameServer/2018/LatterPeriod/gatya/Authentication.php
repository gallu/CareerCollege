<?php // Authentication.php

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
XXXXXXX
        $dbh = DB::getHandle();

        // DBからIDとpasswordを取得する(SQL発行)

        // 入力のID/passとDBのID/passを比較する
//        if (もし不一致だったら) {
            return false;
//        }
        // 一致してたら
        return true;
    }

}
