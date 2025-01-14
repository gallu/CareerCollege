<?php  // battle_common.php
/*
 * 共通関数
 */
require_once  __DIR__ . "/dice.php";

// 回避判定
function dodgeJudgment($offense_chara, $defense_chara) {
    $offense_dice = dice("2d6") + getBonus($offense_chara["status"]["DEX"]);
    $defense_dice = dice("2d6") + getBonus($defense_chara["status"]["DEX"]);

    return $offense_dice <= $defense_dice;
}

// 戦闘ログ(回避したログ)を作成する
function makeDodgeLog($offense_chara, $defense_chara) {
    return [
        "log_type" => "dodge",
        "attacker_name" => $offense_chara["name"],
        "defenser_name" => $defense_chara["name"],
    ];
}

// 戦闘ログ(1回殴ったログ)を作成する
function makeAttackLog($offense_chara, $damage, $defense_chara) {
    return [
        "log_type" => "damage",
        "attacker_name" => $offense_chara["name"],
        "damage" => $damage,
        "defense_hp" => $defense_chara["param"]["HP"],
        "defense_maxhp" => $defense_chara["param"]["MaxHP"],
    ];
}

// 能力値のボーナス値を取得する
function getBonus($param) {
    // return (int)($param / 4);
    return floor($param / 4); // 4で割る(端数切捨て)
}

// 武器のダメージを発生させる
function generateDamage($chara) {
    // var_dump($chara["name"], $chara["equipment"]["weapon"]);
    return dice($chara["equipment"]["weapon"]) + getBonus($chara["status"]["STR"]);
}

// 生死判定
function isDead($chara) {
    /*
    if ($chara["param"]["HP"] <= 0) {
        // 死んでる！！
        return true;
    }
    // まだ生きてるよ
    return false;
    */
    return $chara["param"]["HP"] <= 0;
}

// キャラクラを取り出す
function getChara() {
    $pc = $_SESSION["battle"]["chara"]["pc"] ?? null;
    $npc = $_SESSION["battle"]["chara"]["npc"] ?? null;

    // キャラクタがいなかったら
    if (null === $pc || null === $npc) {
        return [];
    }

    return ["pc" => $pc, "npc" => $npc];
}
