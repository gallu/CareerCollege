<?php  // LootBox.php
declare(strict_types=1);

require_once __DIR__ . "/loot_box_data.php";
// require_once __DIR__ . "/LootBoxMain_1.php";
// require_once __DIR__ . "/LootBoxMain_2.php";
// require_once __DIR__ . "/LootBoxMain_3.php";
require_once __DIR__ . "/LootBoxMain_4.php";

class LootBox {
    private array $data;
    private LootBoxMain $loot_box_main;
    public function __construct(array $data, LootBoxMain $loot_box_main) {
        $this->data = $data;
        $this->loot_box_main = $loot_box_main;
    }

    public function draw(): array {
        return $this->loot_box_main->draw($this->data);
    }
}

// インスタンス作る
$obj = new LootBox($loot_box_data, new LootBoxMain());
// 引く(乱択)
$card = $obj->draw();

var_dump($card);

