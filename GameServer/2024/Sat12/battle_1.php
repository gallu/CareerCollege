<?php  // battle_1.php
/*
 * 一番単純な戦闘
 *      コマンド入力なし
 *      命中判定なし
 */
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
//
$logs = [];

// 戦闘処理
$block = 100;
while(0 <= --$block) {
    // echo "{$block}<br>";
    // pcの攻撃
    $damage = generateDamage($pc);
    $npc["param"]["HP"] -= $damage;
    // echo "{$pc["name"]}の攻撃!! {$damage} ダメージ!! : {$npc["param"]["HP"]}/{$npc["param"]["MaxHP"]}<br>\n";
    $logs[] = makeAttackLog($pc, $damage, $npc);
    if (isDead($npc)) {
        break;
    }

    // npcの攻撃
    $damage = generateDamage($npc);
    $pc["param"]["HP"] -= $damage;
    // echo "{$npc["name"]}の攻撃!! {$damage} ダメージ!! : {$pc["param"]["HP"]}/{$pc["param"]["MaxHP"]}<br>\n";
    $logs[] = makeAttackLog($npc, $damage, $pc);
    if (isDead($pc)) {
        break;
    }
}
// var_dump($pc["param"], $npc["param"]);
// var_dump($logs);
foreach ($logs as $l) {
    echo htmlspecialchars("{$l["attacker_name"]}の攻撃!! {$l["damage"]} ダメージ!! : {$l["defense_hp"]}/{$l["defense_maxhp"]}"), "<br>\n";
}

// 戦闘結果の出力
if (isDead($npc)) {
    echo "PCの勝利!!";
} else {
    echo "NPCの勝利 orz";
}

