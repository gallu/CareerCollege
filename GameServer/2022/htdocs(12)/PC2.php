<?php   // PC2.php
//   https://dev2.m-fr.net/アカウント名/PC2.php
require_once(__DIR__ . "/dice.php");

class PC {
    //
    public function __construct() {
        // 各パラメタを設定する
        $this->STR = dice("3d6");
        $this->DEX = dice("3d6");
        $this->INT = dice("3d6");
        $this->WIZ = dice("3d6");
        $this->CON = dice("3d6");
        $this->CHA = dice("3d6");
        //
        $this->max_hp = dice("3d8");
        $this->hp = $this->max_hp;
    }

    // ダメージを負う
    public function damage($num) {
        $this->hp -= $num;
    }
    // 生死判定(生きてたらtrue)
    public function isAlive() {
        return $this->hp >= 1;
    }

    //
    public function print() {
        echo "HP: {$this->hp}/{$this->max_hp} <br>";
/*
        echo "STR: {$this->STR} <br>";
        echo "DEX: {$this->DEX} <br>";
        echo "INT: {$this->INT} <br>";
        echo "WIZ: {$this->WIZ} <br>";
        echo "CON: {$this->CON} <br>";
        echo "CHA: {$this->CHA} <br>";
*/
    }

    //
    private $STR; // 筋力
    private $DEX; // 敏捷力
    private $INT; // 知力
    private $WIZ; // 賢さ
    private $CON; // 耐久力
    private $CHA; // 魅力
    //
    private $hp;
    private $max_hp;
}
/*
$obj = new PC();
//var_dump($obj);
$obj->damage(10);
var_dump($obj->isAlive());
$obj->print();
*/
