<?php  // Authorization.php
declare(strict_types=1);

/**
 * 認可処理をつかさどるクラス
 */
class Authorization {
    private const SKEY = 'admin_user';
    
    // ログインしているかどうかを判定する
    public function isLogin(): bool {
        return isset($_SESSION[static::SKEY]);
    }

    // ログインする
    public function onLogin(object $user) {
        // セキュリティ対策
        session_regenerate_id(true);

        // ログイン情報を格納
        foreach($user as $k => $v) {
            $_SESSION[static::SKEY]['user'][$k] = $v;
        }
    }

    // ログアウト
    public function logout() {
        unset($_SESSION[static::SKEY]);
    }
}
