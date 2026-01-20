<?php  // LootBoxMain_2.php
declare(strict_types=1);

// 排出確率が百分率なら、あり。千分率なら、ギリ。
class LootBoxMain {
    public function draw(array $data): array {
        // 排出確率を考慮した配列を作成
        $deck = [];
        foreach ($data as $c) {
            for ($i = 0; $i < $c["probability"]; ++$i) {
                $deck[] = $c;
            }
        }

        // 乱択
        $count = count($deck);
        $idx = random_int(0, $count-1);
        $card = $deck[$idx];

        return $card;
    }
}
