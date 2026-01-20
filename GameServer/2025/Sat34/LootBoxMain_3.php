<?php  // LootBoxMain_3.php
declare(strict_types=1);

// 「正式なコード」を理解するための学習用のコード
class LootBoxMain {
    public function draw(array $data): array {
        // 排出確率の合計を算出
        $probability_total = 0;
        foreach ($data as $d) {
            $probability_total += $d["probability"];
        }
        // echo "probability total is {$probability_total}<br>\n";

        //
        $r = random_int(0, $probability_total-1);
        // echo "random is {$r}<br>\n";

        //
        if ($r < 30) {
            // ドラゴン 30
            return $data[0];
        } elseif ($r < 30 + 5) { // 35
            // ゴブリン 5
            return $data[1];
        } elseif ($r < 30 + 5 + 10) { // 45
            // スライム 10
            return $data[2];
        } elseif ($r < 30 + 5 + 10 + 8) { // 53
            // リッチ  8
            return $data[3];
        } elseif ($r < 30 + 5 + 10 + 8 + 12) { // 65
            // ケルベロス    12
            return $data[4];
        } elseif ($r < 30 + 5 + 10 + 8 + 12 + 7) { // 72
            // ハーピー 7
            return $data[5];
        } elseif ($r < 30 + 5 + 10 + 8 + 12 + 7 + 18) { // 90
            // ミノタウロス   18
            return $data[6];
        } elseif ($r < 30 + 5 + 10 + 8 + 12 + 7 + 18 + 100) { // 100
            // マンティコア   10
            return $data[7];
        }

        // 本来、ありえない
        throw new Exception("ありえない!");
    }
}
