<?php  // loop2_web.php
require_once(__DIR__ . "/PC2.php");

ob_start();
session_start();

// PCデータを取り出す or 新たに作る
if (array_key_exists("pc", $_SESSION) === true) {
    $pc = $_SESSION["pc"];
    $enemy = $_SESSION["enemy"];
} else {
    $pc = new PC();
    $enemy = new PC();
    $_SESSION["logs"] = [];
}

// ダメージを負う
$d = random_int(1, 10);
$_SESSION["logs"][] = "PCは {$d}のダメージ！！ <br>";
$pc->damage($d);
echo "PC: ";
$pc->print();
//
$d = random_int(1, 10);
$_SESSION["logs"][] = "敵は {$d}のダメージ！！ <br>";
$enemy->damage($d);
echo "敵: ";
$enemy->print();

// ログを表示
foreach($_SESSION["logs"] as $log) {
    echo $log;
}

// PCデータを改めて保存
$_SESSION["pc"] = $pc;
$_SESSION["enemy"] = $enemy;

// if (PCが死んだら or 敵が死んだら) {
if ( (false === $pc->isAlive()) or (false === $enemy->isAlive()) ) {
    if (false === $enemy->isAlive()) {
        echo "敵を倒した!! <br>";
    }
    if (false === $pc->isAlive()) {
        echo "倒されてしまった orz <br>";
    }
    unset($_SESSION["pc"]);
    unset($_SESSION["enemy"]);
}

?><!doctype html>
<form action="./loop2_web.php" method="post">
    <button>ぼたん</button>
</form>
<form action="./loop2_web_clear.php" method="post">
    <button>戦闘をやり直す</button>
</form>