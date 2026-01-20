<?php  // item_use_function_2_test.php

require_once __DIR__ . "/item_use_function_2.php";

function test_hp_success() {
    $pc = [
        "max_hp" => 500,
        "hp" => 50,
        "max_mp" => 500,
        "mp" => 50,
    ];
    // print_r($pc);

    // 回復させる量
    $heal_nums = [20, 50, 128];
    foreach ($heal_nums as $heal_num) {
        $item = [
            "effect" => "hp:{$heal_num}",
        ];
        $r = itemUse($pc, $item);
        // print_r($r["pc"]);

        // チェック
        if ( ($pc["hp"]+$heal_num) === $r["pc"]["hp"] ) {
            echo "success!! \n";
        } else {
            echo "failure orz \n";
        }
    }
}

function test_mp_success() {
    $pc = [
        "max_hp" => 500,
        "hp" => 50,
        "max_mp" => 500,
        "mp" => 50,
    ];
    // print_r($pc);

    // 回復させる量
    $heal_nums = [20, 50, 128];
    foreach ($heal_nums as $heal_num) {
        $item = [
            "effect" => "mp:{$heal_num}",
        ];
        $r = itemUse($pc, $item);
        // print_r($r["pc"]);

        // チェック
        if ( ($pc["mp"]+$heal_num) === $r["pc"]["mp"] ) {
            echo "success!! \n";
        } else {
            echo "failure orz \n";
        }
    }
}

function test_mix_success() {
    $pc = [
        "max_hp" => 500,
        "hp" => 50,
        "max_mp" => 500,
        "mp" => 50,
    ];
    // print_r($pc);

    $heal_hp_num = 12;
    $heal_mp_num = 34;
    $item = [
        "effect" => "hp:{$heal_hp_num}, mp:{$heal_mp_num}",
    ];
    $r = itemUse($pc, $item);
    // print_r($r["pc"]);

    // チェック
    if (
        ($pc["hp"]+$heal_hp_num) === $r["pc"]["hp"]
        &&
        ($pc["mp"]+$heal_mp_num) === $r["pc"]["mp"]
    ) {
        echo "success!! \n";
    } else {
        echo "failure orz \n";
    }
}

// testを実行
test_hp_success();
test_mp_success();
test_mix_success();
