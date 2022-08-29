<?php   // class.php
declare(strict_types=1);

class クラス名 {
    // 定数
    public const 定数名 = "オブジェクト定数";
    
    // 関数
    public function メソッド() {
        echo "into メソッド<br>";
    }

    // 変数
    private string $プロパティ = "初期値";
}

//
$インスタンス = new クラス名();
var_dump($インスタンス);
var_dump( クラス名::定数名 );
$インスタンス->メソッド();
