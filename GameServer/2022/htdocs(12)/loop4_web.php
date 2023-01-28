<?php  // loop4_web.php
require_once(__DIR__ . "/PC3.php");
require_once(__DIR__ . "/Battle2.php");

ob_start();
session_start();

// なければ、PCデータを新たに作る
if (array_key_exists("battle_data", $_SESSION) === false) {
    header("Location: ./loop4_web_create.php");
    exit;
}

// 戦闘用クラスのインスタンスを作成
$battle = new Battle();

// １ターンの戦闘
$battle->oneTurnBattle();

// 現在のHPを表示
$battle->printStatus();

// ログを表示
$battle->printLog();


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
<form action="./loop4_web.php" method="post">
    <button name="action" value="hit">物理攻撃</button>
    <button name="action" value="heal">治療呪文</button>
</form>
<form action="./loop4_web_clear.php" method="post">
    <button>戦闘をやり直す</button>
</form>