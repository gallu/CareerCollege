<?php  // battle_chara_print.php
require_once  __DIR__ . "/battle_init.php";

// キャラクラを取り出す
$r = getChara();
// キャラがいなかったらエラーを表示
if ([] === $r) {
    echo "キャラが未作成です";
    return ;
}
//
$pc = $r["pc"];
$npc = $r["npc"];

?><!doctype html>
<html>
  <head>
    <title>戦闘</title>
  </head>

  <body>
    PC:<?php echo htmlspecialchars($pc["name"]); ?><br>
    <table border="1">
    <tr>
      <td>STR
      <td><?php echo htmlspecialchars($pc["status"]["STR"]); ?>
    <tr>
      <td>DEX
      <td><?php echo htmlspecialchars($pc["status"]["DEX"]); ?>
    <tr>
      <td>武器
      <td><?php echo htmlspecialchars($pc["equipment"]["weapon"]); ?>
    <tr>
      <td>HP
      <td><?php echo htmlspecialchars($pc["param"]["HP"]); ?>
           /
          <?php echo htmlspecialchars($pc["param"]["MaxHP"]); ?>
    </table>
    <br>
    NPC:<?php echo htmlspecialchars($npc["name"]); ?><br>
    <table border="1">
    <tr>
      <td>STR
      <td><?php echo htmlspecialchars($npc["status"]["STR"]); ?>
    <tr>
      <td>DEX
      <td><?php echo htmlspecialchars($npc["status"]["DEX"]); ?>
    <tr>
      <td>武器
      <td><?php echo htmlspecialchars($npc["equipment"]["weapon"]); ?>
    <tr>
      <td>HP
      <td><?php echo htmlspecialchars($npc["param"]["HP"]); ?>
           /
          <?php echo htmlspecialchars($npc["param"]["MaxHP"]); ?>
    </table>
    <br>
    ・<a href="./battle.html">Topに戻る</a><br>

  </body>
</html>



