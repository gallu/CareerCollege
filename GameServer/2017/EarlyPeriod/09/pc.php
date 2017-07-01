<?php
// pc.php

/*
 * １インスタンスが「一人のPC」を意味するクラス
 */
class pc {
//public:
public function __construct($hp, $mp) {
    //
    $this->max_hp_ = $this->hp_ = $hp;
    $this->max_mp_ = $this->mp_ = $mp;
}
// HPにダメージ
public function damage_hp($d) {
    $this->hp_ -= $d;
}
// MPにダメージ
public function damage_mp($d) {
    $this->mp_ -= $d;
    // 0未満にはしない(MPのみ)
    if (0 > $this->mp_) {
        $this->mp_ = 0;
    }
}
// 死亡判定
public function is_dead() {
    if (0 >= $this->hp_) {
        true;
    }
    // else
    return false;
}
//
public function heal_hp($i) {
    $this->hp_ += $i;
    if ($this->hp_ > $this->max_hp_) {
        $this->hp_ = $this->max_hp_;
    }
}
public function heal_mp($i) {
    $this->mp_ += $i;
    if ($this->mp_ > $this->max_mp_) {
        $this->mp_ = $this->max_mp_;
    }
}
//
public function view() {
    echo "HP:{$this->hp_}/{$this->max_hp_}<br>\n";
    echo "MP:{$this->mp_}/{$this->max_mp_}<br>\n";
}




// アクセサ
protected function set_hp($i) {
    $this->hp_ = $i;
}
public function get_hp() {
    $this->hp_;
}




//private:
private $atk_; // 今回は使わない
private $def_; // 今回は使わない
private $hp_;
private $max_hp_;
private $mp_;
private $max_mp_;
} // end of class
