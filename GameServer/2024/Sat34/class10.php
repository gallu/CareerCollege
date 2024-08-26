<?php  // class10.php
/*
is-a関係

装備品
    アイテム名
    売価
    お店販売フラグ
    フレーバーテキスト
    攻撃力
    防御力

武器 is a 装備品
防具 is a 装備品
*/

// 装備品 親クラス
class Equipment {
    private string $name;
    private int $price;
    private int $offense_point;
    private int $defense_point;
}

// 武器
class Weapon extends Equipment {
}

// 鎧
class Armor extends Equipment {
}

// $obj = new Equipment();
// var_dump($obj);

$wobj = new Weapon();
var_dump($wobj);

$aobj = new Armor();
var_dump($aobj);






