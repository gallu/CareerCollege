<?php  // poke_damage.php
/*
ダメージ=攻撃側のレベル×2÷5+2→切り捨て
    ×物理技(特殊技)の威力×攻撃側のこうげき(とくこう)÷防御側のぼうぎょ(とくぼう)→切り捨て
    ÷50+2→切り捨て
    ×乱数(0.85, 0.86, …… ,0.99, 1.00 のどれか)→切り捨て
*/

// 攻撃側のレベル×2÷5+2 の「2÷5」の部分
const DAMAGE_RATE = 2 / 5;
// 攻撃側のレベル×2÷5+2 の「+2」の部分
const DAMAGE_RATE_ADD = 2;
// ダメージ計算の「÷50+2」の 「÷50」の部分
const DAMAGE_RATE_2 = 50;
// ダメージ計算の「÷50+2」の 「+2」の部分
const DAMAGE_RATE_ADD_2 = 2;

function ポケモンダメージ計算式用乱数() {
    // 乱数(0.85, 0.86, …… ,0.99, 1.00 のどれか)
    $r = random_int(85, 100);
    return $r / 100;
}

function ポケモンダメージ計算式($攻撃側レベル, $威力, $こうげき, $ぼうぎょ) {
    $damage = floor($攻撃側レベル * DAMAGE_RATE + DAMAGE_RATE_ADD);
    $damage = floor($damage * $威力 * $こうげき / $ぼうぎょ);
    $damage = floor($damage / DAMAGE_RATE_2 + DAMAGE_RATE_ADD_2);
    $damage = floor($damage * ポケモンダメージ計算式用乱数());
    // var_dump($damage);

    return $damage;
}

// サンプルの計算
$r = ポケモンダメージ計算式(50, 100, 182, 189);
var_dump($r);
