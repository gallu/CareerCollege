<?php  // item_function_3.php

function item_function_mono($pc, $e) {
    // 前後のスペースは除去
    $effects = explode(":", trim($e));
    //var_dump($effects);
    switch($effects[0]) {
        //
        case 'hp': 
            echo "HP: {$effects[1]} 回復 <br>";
            $pc->healHP(dice($effects[1]));
            break;

        case 'mp': 
            echo "MP: {$effects[1]} 回復 <br>";
            $pc->healMP(dice($effects[1]));
            break;
    }
}

function item_function($pc, $item) {
    // 「複数かもしれない効果関数」を個々に分解する
    $es = explode(",", strtolower($item["effect_function"]));
    //var_dump($es); exit;

    //　個々の効果関数を解決
    foreach($es as $e) {
        item_function_mono($pc, $e);
    }
}
