<?php   // PC.php

//
class PC {
    //
    public function __construct() {
        $this->max_hp = $this->hp = 200;
        $this->max_mp = $this->mp = 250;
        // 「テスト」用に使うので、ダメージを入れておく
        $this->hp -= 150;
        $this->mp -= 150;
    }
    //
    public function healHp($num) {
        $this->hp += $num;
        echo "HP: {$num}点回復 <br>\n";
        if ($this->hp > $this->max_hp) {
            echo "HP 回復が溢れた... <br>\n";
            $this->hp = $this->max_hp;
        }
    }
    public function healMp($num) {
        $this->mp += $num;
        echo "MP: {$num}点回復 <br>\n";
        if ($this->mp > $this->max_mp) {
            echo "MP 回復が溢れた... <br>\n";
            $this->mp = $this->max_mp;
        }
    }
    
    //
    public function debugPrint() {
        echo "HP: {$this->hp} / {$this->max_hp} <br>\n";
        echo "MP: {$this->mp} / {$this->max_mp} <br>\n";
    }

private $hp;
private $max_hp;
private $mp;
private $max_mp;
}
