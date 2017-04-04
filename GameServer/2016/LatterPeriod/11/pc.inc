<?php
// pc.inc

class PC {
//public:
  // heal
  public function heal_hp($i) {
    // とりあえず回復
    $this->set_hp($this->get_hp() + $i);
    // 最大値のチェック
    if ($this->get_hp() > $this->get_max_hp()) {
      $this->set_hp( $this->get_max_hp() );
    }
  }
  public function heal_mp($i) {
    // とりあえず回復
    $this->set_mp($this->get_mp() + $i);
    // 最大値のチェック
    if ($this->get_mp() > $this->get_max_mp()) {
      $this->set_mp( $this->get_max_mp() );
    }
  }

  // max_hp
  public function get_max_hp() { return $this->max_hp_; }
  public function set_max_hp($v) { $this->max_hp_ = $v; }
  // max_mp
  public function get_max_mp() { return $this->max_mp_; }
  public function set_max_mp($v) { $this->max_mp_ = $v; }
  // hp
  public function get_hp() { return $this->hp_; }
  public function set_hp($v) { $this->hp_ = $v; }
  // mp
  public function get_mp() { return $this->mp_; }
  public function set_mp($v) { $this->mp_ = $v; }


//private:
private $max_hp_;
private $max_mp_;
private $hp_;
private $mp_;
};
