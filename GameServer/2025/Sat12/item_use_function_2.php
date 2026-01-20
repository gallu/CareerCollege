<?php  // item_use_function_2.php

// 「アイテムを使う」の実装(DSLによる実装)
function itemUse($pc, $item) {
    //
    $log = [];

    // 「効果」を把握
    $effects_string = $item["effect"];
// var_dump($effects_string);
// echo "<br>";

    // 効果を単体に切り出す
    $effects = explode(",", $effects_string);

    // 単体の効果を適用していく
    foreach ($effects as $effect) {
        [$effect_index, $effect_value] = explode(":", trim($effect), 2);
// var_dump($effect_index, $effect_value);
// echo "<br>";

        // 効果を適用
        if ($effect_index === "hp") {
            $pc["hp"] += (int)$effect_value;
            $log["hp"] = (int)$effect_value;
        }
        if ($effect_index === "mp") {
            $pc["mp"] += (int)$effect_value;
            $log["mp"] = (int)$effect_value;
        }
    }

    return ["pc" => $pc, "log" => $log];
}
