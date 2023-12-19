<?php  // Authorization.php
declare(strict_types=1);

class Authorization {
    private const SKEY = "admin_user";

    public function isLogin(): bool {
        return isset($_SESSION[self::SKEY]);
    }
    public function onLogin(object $user) {
        // セキュリティ対策
        session_regenerate_id(true);

        // 認可情報の格納
        foreach($user as $k => $v) {
            $_SESSION[self::SKEY]["user"][$k] = $v;
        }
    }
    public function logout() {
        unset($_SESSION[self::SKEY]);
    }
}
