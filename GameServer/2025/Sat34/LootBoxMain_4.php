<?php  // LootBoxMain_4.php
declare(strict_types=1);

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
        $p = 0;
        foreach ($data as $d) {
            $p += $d["probability"];
            // echo "{$d['name']}: {$p} <br>\n";
            if ($r < $p) {
                return $d;
            }
        }

        // 本来、ありえない
        throw new Exception("ありえない!");
    }
}
