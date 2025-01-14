<?php  // battle_1.php
require_once __DIR__ . "/battle_init.php";

// PCとNPCの情報取得
$r = BattleUtil::get();
if (null === $r) {
    echo "キャラクタ未作成です";
    return;
}
$pc = $r->pc;
$npc = $r->npc;

// 完全回復
$pc->heal(999);
$npc->heal(999);

// ログを積む準備
$log = [];

// どちらかが倒れるまで戦闘
$rock = 10;
while(0 <= --$rock) {
    // echo "{$rock} <br>";

    // PCの攻撃
    $damage = $pc->getDamage();
    $npc->damage( $damage );
    $log[] = new BattleLogDamage($pc->getName(), $npc->getName(), $damage);
    if ($npc->isDead()) {
        $log[] = new BattleLogDead($npc->getName());
        break;
    }

    // NPCの攻撃
    $damage = $npc->getDamage();
    $pc->damage( $damage );
    $log[] = new BattleLogDamage($npc->getName(), $pc->getName(), $damage);
    if ($pc->isDead()) {
        $log[] = new BattleLogDead($pc->getName());
        break;
    }
}
// var_dump($pc, $npc);

// ログ出力
foreach($log as $o) {
    echo htmlspecialchars((string)$o),  "<br>\n";
}
