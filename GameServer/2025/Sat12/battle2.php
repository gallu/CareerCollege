<?php  // battle2.php

$myName = "おいちゃん";
$myHash = md5($myName);
// var_dump($myHash);
// echo "<br>";

// HPの算出
$mySub = substr($myHash, 0, 8);
$myParam = hexdec($mySub);
// echo "{$mySub}, {$myParam} <br>";
$myHp = $myParam % 100 + 50;
// echo "HP: {$myHp} <br>";

// 攻撃力の算出
$mySub = substr($myHash, 8, 8);
$myParam = hexdec($mySub);
// echo "{$mySub}, {$myParam} <br>";
$myWeapon = $myParam % 50 + 1;
// echo "Weapon: {$myWeapon} <br>";

// 敵のパラメタ
$enemyHp = 100;
$enemyWeapon = 25;

// パラメタの表示
echo "My  HP:{$myHp} / Weapon:{$myWeapon} <br>";
echo "enemy  HP:{$enemyHp} / Weapon:{$enemyWeapon} <br>";

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
