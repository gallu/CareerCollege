<?php  // battle_make_chara.php
require_once  __DIR__ . "/dice.php";

// キャラクタを1体作成する
function makeChara($name) {
    // 武器の一覧
    $weapon_list = [
        "1d4",
        "1d6",
        "1d8",
        "1d20",
    ];

    $pc = [
        "name" => $name,
        "status" => [
            "STR" => 0,
            "DEX" => 0,
        ],
        "param" => [
            "MaxHP" => 0,
            "HP" => 0,
        ],
        "equipment" => [
            "weapon" => "",
        ],
    ];
    // 値をきめる
    foreach ($pc["status"] as $k => $v) {
        $pc["status"][$k] = dice("3d6");
    }
    //
    $pc["param"]["HP"] = $pc["param"]["MaxHP"] = dice("6d8");

    // 武器を選択する
    $pc["equipment"]["weapon"] = $weapon_list[random_int(0, 3)];

    return $pc;
}
// 雑テスト
// $pc = makeChara();
// print_r($pc);
