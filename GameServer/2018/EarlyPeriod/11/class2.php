<?php  // class2.php

class EquipmentItem {
    public function __construct($of, $de) {
        $this->offense = $of;
        $this->defense = $de;
    }
    public $offense; // 攻撃力
    public $defense; // 防御力
}

class PC {
    //
    public function __construct($str, $vit, $hp) {
        $this->str = $str;
        $this->vit = $vit;
        $this->hp  = $hp;
        $this->equipment = [];
    }
    // メソッド(クラス内関数)
    public function equipWeapon($obj) {
        $this->equipment['Weapon'] = $obj;
    }
    public function equipArmor($obj) {
        $this->equipment['Armor'] = $obj;
    }
    //
    public function get攻撃力() {
        // 基本はSTR
        $offense = $this->str;
        // 装備品の攻撃力を加算する
        foreach($this->equipment as $obj) {
            $offense += $obj->offense;
        }
        //
        return $offense;
    }
    public function get防御力() {
        // 基本はVIT
        $defense = $this->vit;
        // 装備品の防御力を加算する
        foreach($this->equipment as $obj) {
            $defense += $obj->defense;
        }
        //
        return $defense;
    }
    public function getHp() {
        return $this->hp;
    }

    // プロパティ(クラス内変数)
    private $str;
    private $vit;
    private $hp;
    private $equipment;
}

//
$obj = new PC(mt_rand(1, 12), mt_rand(1, 12), mt_rand(1, 12));
//
echo '攻撃力: ', $obj->get攻撃力(), "<br>\n";
echo '防御力: ', $obj->get防御力(), "<br>\n";
echo 'Hp: ', $obj->getHp(), "<br>\n";

//
$e_weapon = new EquipmentItem(100, 0);
$obj->equipWeapon($e_weapon);
//var_dump($e_weapon);
//$obj->equipWeapon( new EquipmentItem(100, 0) );

$e_armor = new EquipmentItem(0, 50);
$obj->equipArmor($e_armor);
//var_dump($e_armor);
//
echo "<br>\n装備後のステータス<br>\n";
echo '攻撃力: ', $obj->get攻撃力(), "<br>\n";
echo '防御力: ', $obj->get防御力(), "<br>\n";
echo 'Hp: ', $obj->getHp(), "<br>\n";






