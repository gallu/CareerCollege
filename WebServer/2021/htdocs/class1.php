<?php   // class1.php
declare(strict_types=1);

// クラスの基礎
class Hoge {
    // 関数(メソッド)
    public function t() {
        echo "t <br>\n";
    }
    public function setNum($v) {
        $this->i = $v;
    }

    // 変数(プロパティ)
    private $i = 0;
}

//
$obj = new Hoge();
var_dump($obj);
$obj->t();
//var_dump($obj->i); // privateだから怒られる
$obj->setNum(999);
var_dump($obj);

