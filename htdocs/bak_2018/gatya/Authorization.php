<?php  // Authorization.php

class Authorization {
    //
    public static function getUserId() {
        return $_SESSION['auth']['user_id'];
    }

    //
    public static function authOn($user) {
        session_regenerate_id(true);
        $_SESSION['auth'] = $user;
    }
    //
    public static function isAuth() {
        return isset($_SESSION['auth']);
    }
    //
    public static function logout() {
        unset($_SESSION['auth']);
    }

}
