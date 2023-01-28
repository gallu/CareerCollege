<?php // class_1st.php

// クラスを定義する
class SimpleClass{
    // 関数(メソッド)
    public function pub_hoge(){
        echo "call pub_hoge\n";
    }
    protected function pro_hoge(){
        echo "call pro_hoge\n";
    }
    private function pri_hoge(){
        echo "call pri_hoge\n";
    }

// 変数(プロパティ)
public $pub_i;
protected $pro_i;
private $pri_i;
}

// クラスを使う
$obj = new SimpleClass();
//
$obj->pub_hoge();
$obj->pub_i = 100;
var_dump($obj);
//
//$obj->pri_hoge();
$obj->pri_i = 100;











