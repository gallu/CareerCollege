<?php  // UseItem_2_test.php

require_once __DIR__ . "/PC.php";
require_once __DIR__ . "/Item.php";
require_once __DIR__ . "/UseItem_2.php";

// テスト用のItemクラスを作成する
class ItemForTest extends Item {
    // 渡されたデータをそのままItemとみなす
    public function __construct(array $arr) {
        $this->datum = $arr;
    }
}

function test_hp() {
    $heal_hp_nums = [50, 150, 200];
    foreach ($heal_hp_nums as $heal_hp_num) {
        $item = new ItemForTest(["effect_formula" => "HP:{$heal_hp_num}"]);
        // var_dump($item);
        // echo "<br>";

        // PCの準備
        $pc = new PC();
        $pc->max_hp = 500000000;
        $pc->max_mp = 500000000;
        $pc->hp = 50;
        $pc->mp = 50;
        // $pc->print();
        $before_hp = $pc->hp;
        
        // アイテムを使う
        $use_item = new UseItem();
        $log = $use_item->use($pc, $item);

        // $pc->print();
        $after_hp = $pc->hp;
        // var_dump($before_hp, $after_hp);
        if ($before_hp+$heal_hp_num === $after_hp) {
            echo "success!! <br>";
        } else {
            echo "failure orz <br>";
        }
    }
}


//
test_hp();

