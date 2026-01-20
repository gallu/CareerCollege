<?php  // UseItem_1.php

class UseItem {
    public function use(PC $pc, Item $item) {
        // var_dump($pc, $item);
        // アイテム使用の処理をする
        $log = [];
        switch ($item->datum["id"]) {
            case 10001: // ポーション
                $pc->heal(50);
                $log["hp"] = 50;
                break;
            case 10002: // ハイポーション
                $pc->heal(200);
                $log["hp"] = 200;
                break;
            case 20001: // エーテル
                $pc->healMp(50);
                $log["mp"] = 50;
                break;
            case 20002: // ハイエーテル
                $pc->healMp(200);
                $log["mp"] = 200;
                break;
            case 50001: // エリクサー
                $pc->heal(9999);
                $pc->healMp(9999);
                $log["hp"] = 9999;
                $log["mp"] = 9999;
                break;
        }
        
        return $log;
    }
}
