<?php  // LootBoxMain_1.php
declare(strict_types=1);

// 排出確率が考慮されていないので、今回はダメ
class LootBoxMain {
    public function draw(array $data): array {
        $count = count($data);
        $idx = random_int(0, $count-1);
        $card = $data[$idx];
        
        return $card;
    }
}
