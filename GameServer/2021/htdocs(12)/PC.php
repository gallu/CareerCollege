<?php   // PC.php
require_once( __DIR__ . '/dice.php');

class PC {
    //
    public function __construct() {
        $this->dex = dice('3d6');
        $this->vit = dice('3d6');
        //
        $this->max_hp = $this->hp = dice('30d8') + ($this->getVitBonus() * 15);
        $this->max_mp = $this->mp = dice('30d8');
        //$this->protection = dice('5d6');
        $this->protection = 0;
    }
    //
    public function getDex() {
        return $this->dex;
    }
    public function getVit() {
        return $this->vit;
    }
    //
    public function getDexBonus() {
        return $this->_getBonus($this->getDex());
    }
    public function getVitBonus() {
        return $this->_getBonus($this->getVit());
    }
    protected function _getBonus($p) {
        $bonus = intval($p / 3) - 3;
        return $bonus;
    }
    
    //
    public function dodge($attack) {
        $d = dice('2d6') - $attack + $this->getDexBonus();
        if ($d >= 7) {
            echo "避けた！！\n";
            return true;
        }
        //
        return false;
    }
    
    //
    public function heal($num) {
        // とりあえず回復
        $this->hp = $this->hp + $num;
        echo "{$num}点回復！！<br>\n";

        // 溢れたら差し戻し
        if ($this->max_hp < $this->hp) {
            echo "回復があふれた……<br>\n";
            $this->hp = $this->max_hp;
        }
    }
    //
    public function damage($num) {
        // 実ダメージの計算
        $damage = $num - $this->protection;
        if (0 >= $damage) {
            echo "ダメージを跳ね返した!!<br>\n";
            return;
        }
        
        // ダメージの適用
        $this->hp = $this->hp - $damage;
        echo "{$damage}点のダメージ<br>\n";
    }
    //
    public function isLive() {
        if ($this->hp >= 1) {
            return true;
        }
        // else
        return false;

        //return $this->hp >= 1;
    }
    //
    public function healMp($num) {
        // とりあえず回復
        $this->mp = $this->mp + $num;
        echo "MPが{$num}点回復！！<br>\n";

        // 溢れたら差し戻し
        if ($this->max_mp < $this->mp) {
            echo "MPの回復があふれた……<br>\n";
            $this->mp = $this->max_mp;
        }
    }
    //
    public function useMp($num) {
        $this->mp = $this->mp - $num;
    }

    
    //
    public function debugPrint() {
        $dex_bonus = $this->getDexBonus();
        $vit_bonus = $this->getVitBonus();
        echo "HP: {$this->hp} / {$this->max_hp} <br>\n";
        echo "MP: {$this->mp} / {$this->max_mp} <br>\n";
        echo "DEX: {$this->dex}({$dex_bonus}) <br>\n";
        echo "VIT: {$this->vit}({$vit_bonus}) <br>\n";
        echo "Def: {$this->protection} <br>\n";
    }
    
    //
    private $protection; // 防護点
    private $hp;
    private $max_hp;
    private $mp;
    private $max_mp;
    private $dex; // 敏捷力
    private $vit; // 耐久力
}
