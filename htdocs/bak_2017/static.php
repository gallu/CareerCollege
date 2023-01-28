<?php // static.php
class hoge {
    public function f_dynamic() {
        echo "f_dynamic<br>\n"; var_dump(hoge::$p_static);
    }
    static public function f_static() {
        echo "f_static<br>\n"; var_dump(hoge::$p_static);
    }
private $p_dynamic = 'dy';
static private $p_static = 'st';
}
$obj = new hoge();
$obj->f_dynamic();
$obj->f_static();
//
//hoge::f_dynamic();
hoge::f_static();

