<?php  // class2.php

// クラスの定義
class Hoge {
	// 変数(プロパティ)
	public int $num;
	public string $name;
}

// オブジェクト(インスタンス)の生成
$obj = new Hoge();

// 値の代入
$obj->num = 123;
$obj->name = "nanana";

var_dump($obj);
