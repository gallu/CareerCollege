<?php  // loop4_web_create.php
require_once(__DIR__ . "/PC3.php");

ob_start();
session_start();

// PCデータを新しく作る
$_SESSION["battle_data"]["pc"] = new PC("PC");
$_SESSION["battle_data"]["enemy"] = new PC("敵");
$_SESSION["battle_data"]["logs"] = [];

// PCデータだけ出力する
$_SESSION["battle_data"]["pc"]->print();

//header("Location: ./loop4_web.php");
?>
<form action="./loop4_web.php" method="post">
    <button name="action" value="hit">物理攻撃</button>
</form>
<form action="./loop4_web_create.php" method="post">
    <button>PCを作り直す</button>
</form>