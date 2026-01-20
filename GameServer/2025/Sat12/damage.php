<?php  // damage.php

/*
ダメージ = 攻撃力
*/
function damage1($attack) {
    return $attack;
}
//
$r = damage1(10);
var_dump($r);

/*
ダメージ = 攻撃力 - 防御力
(ダメージは0以上であること)
*/
function damage2($attack, $defense) {
    if ($attack <= $defense) {
        return 0;
    }
    return $attack - $defense;
}
$r = damage2(25, 10);
var_dump($r);
$r = damage2(10, 25);
var_dump($r);

/*
ダメージ = （攻撃力 ÷ 2） - （防御力 ÷ 4）
(ダメージは0以上の整数であること: 端数切捨て)
*/
function damage3($attack, $defense) {
    $damage = ($attack / 2) - ($defense / 4);
    $damage = floor($damage); // 端数は切捨て
    if ($damage <= 0) {
        $damage = 0; 
    }
    return $damage;
}
$r = damage3(25, 11);
var_dump($r);

/*
ダメージ = （スキル威力 × 攻撃力） - （相手の防御力）
(ダメージは0以上の整数であること: 端数切捨て)
*/
function damage4($skill_power, $attack, $defense) {
    $damage = ($skill_power * $attack) - $defense;
    $damage = floor($damage); // 端数は切捨て
    if ($damage <= 0) {
        $damage = 0; 
    }
    return $damage;
}
$r = damage4(5, 15, 20);
var_dump($r);
$r = damage4(1.25, 20, 20);
var_dump($r);

/*
ダメージ = （スキル威力 × 攻撃力）÷ 相手の防御力
(ダメージは0以上の整数であること: 端数切捨て)
*/
function damage5($skill_power, $attack, $defense) {
    $damage = ($skill_power * $attack) / $defense;
    $damage = floor($damage); // 端数は切捨て
    if ($damage <= 0) {
        $damage = 0; 
    }
    return $damage;
}
$r = damage5(5, 15, 20);
var_dump($r);
$r = damage5(1.25, 20, 20);
var_dump($r);

/*
ダメージ =  攻撃力 *  (攻撃力 ÷ 防御力) +  (攻撃力 * 0.2)
(ダメージは0以上の整数であること: 端数切捨て)
*/
function damage6($attack, $defense) {
    $damage = $attack * ($attack / $defense) + ($attack * 0.2);
    $damage = floor($damage); // 端数は切捨て
    if ($damage <= 0) {
        $damage = 0; 
    }
    return $damage;
}
$r = damage6(15, 20);
var_dump($r);
$r = damage6(20, 15);
var_dump($r);
$r = damage6(10, 999);
var_dump($r);

