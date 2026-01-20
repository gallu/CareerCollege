<?php  // UseItem_2.php

class UseItem {
    public function use(PC $pc, Item $item) {
        $log = [];

        // 効果文字列を取り出す
        $effect_formulas_string = $item->datum["effect_formula"];
        // var_dump($effect_formulas_string);
        // echo "<br>";

        // 効果文字列から「効果」を(複数)切り出す
        $effect_formulas = explode(",", $effect_formulas_string);

        // 個々の効果を解決していく
        foreach ($effect_formulas as $effect_formula) {
            // 効果文字列を分解(パース)する
            [$effect_key, $effect_value] = explode(":", $effect_formula, 2);
            // var_dump($effect_key, $effect_value);
            // echo "<br>";

            // 効果を適用する
            if ($effect_key === "HP") {
                $pc->heal((int)$effect_value);
                $log["hp"] = (int)$effect_value;
            }
            if ($effect_key === "MP") {
                $pc->healMp((int)$effect_value);
                $log["mp"] = (int)$effect_value;
            }
        }

        return $log;
    }
}
