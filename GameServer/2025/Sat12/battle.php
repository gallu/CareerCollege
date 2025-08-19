<?php  // battle.php

// ステータス設定
$myHp = 100;
$enemyHp = 100;
//
$myWeapon = 20;
$enemyWeapon = 20;

// 戦闘
// [NOTE]まぁ100ターンは殴り合いしないだろう
for ($i = 0; $i < 100; ++$i) {
    // こっちが殴る
    $damage = random_int(1, $myWeapon);
    $enemyHp = $enemyHp - $damage;
    echo "殴った! my:{$myHp} / enemy:{$enemyHp}<br>";
    // 死亡したら終わり
    if ($enemyHp <= 0) {
        break;
    }

    // 殴られる
    $damage = random_int(1, $enemyWeapon);
    $myHp = $myHp - $damage;
    echo "殴られた... my:{$myHp} / enemy:{$enemyHp}<br>";
    // 死亡したら終わり
    if ($myHp<= 0) {
        break;
    }
}

// 勝敗判定
if ($enemyHp <= 0) {
    echo "勝った！！<br>";
} else {
    echo "負けた...<br>";
}
