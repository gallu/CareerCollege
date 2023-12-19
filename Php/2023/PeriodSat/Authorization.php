<?php  // Authorization.php
declare(strict_types=1);

class Authorization {
    const SKEY = "admin_auth";

    // ログイン
    public function onLogin(object $o) {
        //　PHP固有: ログイン時に必須
        session_regenerate_id(true);

        //　ログインしている情報を書く
        foreach($o as $k => $v) {
            $_SESSION[static::SKEY]["user"][$k] = $v;
        }
    }
    // ログアウト
    public function offLogin() {
        unset($_SESSION[static::SKEY]);
    }
    
    public function isLogin(): bool {
        return isset($_SESSION[static::SKEY]);
    }
}
