<?php  // PC2.php

readonly class EquipmentItem {
    public function __construct(
        public string $name, // アイテム名
        public int $price, // 売値
        public int $add_str, // ＋攻撃力
        public string $part, // 装備部位
    ){}
}

class PC {
    private int $str; // 筋力
    private array $equipment = []; // 装備品
    public function __construct(int $str) {
        $this->str = $str;
    }
    public function getDamageNum(): int {
        $str = $this->str;
        foreach ($this->equipment as $e) {
            $str += $e->add_str;
        }
        return $str;
    }
    //
    public function setEquipment(EquipmentItem $item) {
        $this->equipment[$item->part] = $item;
    }
}
//
$pc = new PC(10);
$eitem = new EquipmentItem("ヒノキの棒", 100, 5, "weapon");
$pc->setEquipment($eitem);
var_dump($pc->getDamageNum());
