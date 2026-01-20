<?php  // damage.php
declare(strict_types=1); 

readonly class PC {
    public function __construct(
        public int $attack,
        public int $defense,
        public float $skillPower, // 本当はPCじゃなくてスキルにつくプロパティ
    ) {
    }
}
$pc1 = new PC(attack:10, defense:10, skillPower:0.75);
$pc2 = new PC(attack:15, defense:15, skillPower:1.00);
$pc3 = new PC(attack:20, defense:20, skillPower:1.25);

class BattleUtil {
    /*
     ダメージ = 攻撃力
     */
    public static function calDamage1(PC $pc): int {
        $attack = $pc->attack;
        return $attack;
    }

    /*
     ダメージ = 攻撃力 - 防御力
     (ダメージは0以上)
     */
    public static function calDamage2(PC $offense, PC $defense): int {
        $damage = $offense->attack - $defense->defense;
        if ($damage <= 0) {
            $damage = 0;
        }
        return $damage;
    }

    /*
     ダメージ = （攻撃力 ÷ 2） - （防御力 ÷ 4）
     (ダメージは0以上の整数: 端数切捨て)
     */
    public static function calDamage3(PC $offense, PC $defense): int {
        $damage = ($offense->attack / 2) - ($defense->defense / 4);
        $damage = (int)floor($damage);
        if ($damage <= 0) {
            $damage = 0;
        }
        return $damage;
    }

    /*
     ダメージ = (（攻撃力 ÷ 2） - （防御力 ÷ 4）) * 乱数(0.85～1.15)
     (ダメージは0以上の整数: 端数切捨て)
     */
    public static function calDamage4(PC $offense, PC $defense): int {
        $r = random_int(85, 115);
        $damage = (($offense->attack / 2) - ($defense->defense / 4)) * ($r / 100);
        $damage = (int)floor($damage);
        if ($damage <= 0) {
            $damage = 0;
        }
        return $damage;
    }
    
    /*
     ダメージ = （スキル威力 × 攻撃力） - （相手の防御力）
     (ダメージは0以上の整数: 端数切捨て)
     */
    public static function calDamage5(PC $offense, PC $defense): int {
        $damage = ($offense->skillPower * $offense->attack) - $defense->defense;
        $damage = (int)floor($damage);
        if ($damage <= 0) {
            $damage = 0;
        }
        return $damage;
    }

    /*
     ダメージ =  攻撃力 *  (攻撃力 ÷ 防御力) +  (攻撃力 * 0.2)
     (ダメージは0以上の整数: 端数切捨て)
     */
    public static function calDamage6(PC $offense, PC $defense): int {
        $damage = $offense->attack 
                  * ($offense->attack / $defense->defense) 
                  + ($offense->attack * 0.2);

        // $attack = $offense->attack;
        // $defense = $defense->defense;
        // $damage = $attack * ($attack / $defense) + ($attack * 0.2);

        $damage = (int)floor($damage);
        if ($damage <= 0) {
            $damage = 0;
        }
        return $damage;
    }
}

//
$r = BattleUtil::calDamage1($pc1);
var_dump($r);

$r = BattleUtil::calDamage2($pc1, $pc3);
var_dump($r);

$r = BattleUtil::calDamage3($pc2, $pc3);
var_dump($r);

$r = BattleUtil::calDamage4($pc3, $pc1);
var_dump($r);
$r = BattleUtil::calDamage4($pc3, $pc1);
var_dump($r);
$r = BattleUtil::calDamage4($pc3, $pc1);
var_dump($r);

$r = BattleUtil::calDamage5($pc3, $pc1);
var_dump($r);

$r = BattleUtil::calDamage6($pc3, $pc1);
var_dump($r);

