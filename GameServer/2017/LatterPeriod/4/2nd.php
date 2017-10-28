<?php
// 2nd.php
class hoge {
    public function f_pub() {
        echo "hoge#f_pub()\n";
        $this->f_pri();
    }
    private function f_pri() {
        echo "hoge#f_pri()\n";
    }
}
$obj = new hoge();
$obj->f_pub();
//$obj->f_pri();
