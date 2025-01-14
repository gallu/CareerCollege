<?php  // battle_chara_make.php
require_once  __DIR__ . "/battle_init.php";

// キャラクラを作成する
$_SESSION["battle"]["chara"]["pc"] = makeChara("ぴーしー");
$_SESSION["battle"]["chara"]["npc"] = makeChara("エヌピィシィ"); 

?><!doctype html>
<html>
  <head>
    <title>戦闘</title>
  </head>

  <body>
    キャラクタを作成しました<br>
    <br>
    ・<a href="./battle.html">Topに戻る</a><br>
    ・<a href="./battle_chara_print.php">キャラクタを見る</a><br>

  </body>
</html>
