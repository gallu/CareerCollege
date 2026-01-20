<?php  // PC.php

class PC {
    public int $hp;
    public int $max_hp;
    public int $mp;
    public int $max_mp;

    // returnがfalseの時は「治癒不要」
    public function heal(int $v) {
        // もし不要なら処理しない
        if ($this->hp === $this->max_hp) {
            return false;
        }

        // いったん回復
        $this->hp += $v;
        // max超えてたら足切り
        if ($this->hp > $this->max_hp) {
            $this->hp = $this->max_hp;
        }
        return true;
    }
    public function healMp(int $v) {
        // もし不要なら処理しない
        if ($this->mp === $this->max_mp) {
            return false;
        }

        // いったん回復
        $this->mp += $v;
        // max超えてたら足切り
        if ($this->mp > $this->max_mp) {
            $this->mp = $this->max_mp;
        }
        return true;
    }

    //
    public function print() {
        echo "HP: {$this->hp}/{$this->max_hp}, ";
        echo "MP: {$this->mp}/{$this->max_mp}<br>";
    }
}
