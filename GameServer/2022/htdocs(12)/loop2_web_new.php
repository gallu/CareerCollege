<?php  // loop2_web_new.php
require_once(__DIR__ . "/PC2.php");

ob_start();
session_start();

// PCデータを取り出す or 新たに作る
if (array_key_exists("battle_data", $_SESSION) === false) {
    $_SESSION["battle_data"]["pc"] = new PC();
    $_SESSION["battle_data"]["enemy"] = new PC();
    $_SESSION["battle_data"]["logs"] = [];
}

// ダメージを負う
/**
 * AがBに攻撃
 * $defender 攻撃された側のオブジェクト
 */
function attack($defender, $defender_name) {
    // ダメージの値を作成
    $d = random_int(1, 10);
    // メッセージを積む
    $_SESSION["battle_data"]["logs"][] = "{$defender_name}は {$d}のダメージ！！ <br>";
    // ダメージをPC/敵に適用
    $defender->damage($d);
}
// 敵がPCに攻撃
attack($_SESSION["battle_data"]["pc"], "PC");
// PCが敵に攻撃
attack($_SESSION["battle_data"]["enemy"], "敵");

// 現在のHPを表示
echo "PC: ";
$_SESSION["battle_data"]["pc"]->print();
echo "敵: ";
$_SESSION["battle_data"]["enemy"]->print();

// ログを表示
foreach($_SESSION["battle_data"]["logs"] as $log) {
    echo $log;
}

// if (PCが死んだら or 敵が死んだら)
if (  (false === $_SESSION["battle_data"]["pc"]->isAlive())
      or
      (false === $_SESSION["battle_data"]["enemy"]->isAlive()) 
   ) {
    if (false === $_SESSION["battle_data"]["enemy"]->isAlive()) {
        echo "敵を倒した!! <br>";
    }
    if (false === $_SESSION["battle_data"]["pc"]->isAlive()) {
        echo "倒されてしまった orz <br>";
    }
    // 戦闘データを消去
    unset($_SESSION["battle_data"]);
}

?><!doctype html>
<form action="./loop2_web_new.php" method="post">
    <button>殴る</button>
</form>
<form action="./loop2_web_clear_new.php" method="post">
    <button>戦闘をやり直す</button>
</form>