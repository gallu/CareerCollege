<?php  // battle_chara_make.php
require_once __DIR__ . "/battle_init.php";

// 味方キャラ作成
$pc = new BattlePc("ぴーしー");
// var_dump($pc);

// 敵キャラ作成
$npc = new BattlePc("エヌピーシー");
// var_dump($npc);

// データ保存
BattleUtil::save($pc, $npc);

// 終了メッセージ
?><!DOCTYPE html>
<html>
  <head>
    <title>戦闘</title>
  </head>

  <body>
  キャラ作ったよ!<br>
    ・<a href="./battle.html">Topへ</a>
  </body>
</html>

