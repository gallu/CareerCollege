<?php  // PC.php
//  https://dev2.m-fr.net/アカウント名/PC.php
require_once(__DIR__ . "/dice.php");

class PC {
    //
    public function __construct($name) {
        //
        $this->name = $name;
        //
        $this->STR = dice("3d6");
        $this->DEX = dice("3d6");
        $this->INT = dice("3d6");
        $this->WIZ = dice("3d6");
        $this->CON = dice("3d6");
        $this->CHA = dice("3d6");
        //
        $this->maxHp = $this->hp = dice("10d8");
        $this->maxMp = $this->mp = dice("10d8");
    }

    // ダメージ系
    public function damageHp(int $i) {
        $this->hp -= $i;
    }
    public function damageMp(int $i) {
        $this->mp -= $i;
    }

    // 回復系
    public function healHp(int $i) {
        $this->hp += $i;
        if ($this->hp > $this->maxHp) {
            $this->hp = $this->maxHp;
        }
    }
    public function healMp(int $i) {
        $this->mp += $i;
        if ($this->mp > $this->maxMp) {
            $this->mp = $this->maxMp;
        }
    }


    // 表示用メソッド
    public function print() {
        echo "{$this->name} <br>";
        echo "HP: {$this->hp}/{$this->maxHp} <br>";
        echo "MP: {$this->mp}/{$this->maxMp} <br>";
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
    private $name;
    //
    private $STR; // 筋力
    private $DEX; // 敏捷力
    private $INT; // 知力
    private $WIZ; // 知恵（賢さ）
    private $CON; // 耐久力
    private $CHA; // 魅力
    //
    private $hp;
    private $maxHp;
    private $mp;
    private $maxMp;
}

//
// $pc = new PC("PC　1");
// $pc->print();