<?php  // battle_chara_print.php
require_once __DIR__ . "/battle_init.php";

// PCとNPCの情報取得
$r = BattleUtil::get();
if (null === $r) {
    echo "キャラクタ未作成です";
    return;
}
$pc = $r->pc;
$npc = $r->npc;
// var_dump($pc);

// 出力
?><!DOCTYPE html>
<html>
  <head>
    <title>戦闘</title>
  </head>

  <body>
    pc: <?php echo htmlspecialchars($pc->getName()); ?>
    <table>
    <tr>
      <td>STR
      <td><?php echo htmlspecialchars((string)$pc->getStr()); ?>
    <tr>
      <td>DEX
      <td><?php echo htmlspecialchars((string)$pc->getDex()); ?>
    <tr>
      <td>武器
      <td><?php echo htmlspecialchars((string)$pc->getWeapon()); ?>
    <tr>
      <td>HP
      <td><?php echo htmlspecialchars((string)$pc->getHp()); ?>
          /
          <?php echo htmlspecialchars((string)$pc->getMaxHp()); ?>
    <tr>
      <td>MP
      <td><?php echo htmlspecialchars((string)$pc->getMp()); ?>
          /
          <?php echo htmlspecialchars((string)$pc->getMaxMp()); ?>
    </table>
    <br>
    npc: <?php echo htmlspecialchars($npc->getName()); ?>
    <table>
    <tr>
      <td>STR
      <td><?php echo htmlspecialchars((string)$npc->getStr()); ?>
    <tr>
      <td>DEX
      <td><?php echo htmlspecialchars((string)$npc->getDex()); ?>
    <tr>
      <td>武器
      <td><?php echo htmlspecialchars((string)$npc->getWeapon()); ?>
    <tr>
      <td>HP
      <td><?php echo htmlspecialchars((string)$npc->getHp()); ?>
          /
          <?php echo htmlspecialchars((string)$npc->getMaxHp()); ?>
    <tr>
      <td>MP
      <td><?php echo htmlspecialchars((string)$npc->getMp()); ?>
          /
          <?php echo htmlspecialchars((string)$npc->getMaxMp()); ?>
    </table>
    <br>

    ・<a href="./battle.html">Topへ</a>
  </body>
</html>

