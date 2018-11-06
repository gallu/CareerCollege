<?php  // Authorization.php

class Authorization {
    //
    public static function authOn() {
        session_regenerate_id(true);
        $_SESSION['auth'] = true;
    }
    //
    public static function isAuth() {
        return isset($_SESSION['auth']);
    }

}
