<?php  // BattlePc.php
require_once __DIR__ . "/dice2.php";

class BattlePc {
    private string $name;
    private int $str;
    private int $dex;
    private int $max_hp;
    private int $hp;
    private int $max_mp;
    private int $mp;
    private string $weapon;

    const WEAPON_LIST = [
        "1d3",
        "1d4",
        "1d6",
        "1d10",
    ];

    public function __construct(string $name) {
        $this->name = $name;
        $this->str = dice("3d6");
        $this->dex = dice("3d6");
        $this->hp = $this->max_hp = dice("6d8");
        $this->mp = $this->max_mp = dice("3d6");

        //
        $this->weapon = self::WEAPON_LIST[dice("1d4") - 1];
    }

    public function getWeapon() {
        return $this->weapon;
    }
    public function getName() {
        return $this->name;
    }
    public function getStr() {
        return $this->str;
    }
    public function getDex() {
        return $this->dex;
    }
    public function getMaxHp() {
        return $this->max_hp;
    }
    public function getHp() {
        return $this->hp;
    }
    public function getMaxMp() {
        return $this->max_mp;
    }
    public function getMp() {
        return $this->mp;
    }

    protected function getBonus(int $num): int {
        return (int)floor($num/3);
    }
    public function getStrBonus(): int {
        return $this->getBonus($this->str);
    }
    public function getDexBonus(): int {
        return $this->getBonus($this->dex);
    }

    // 与ダメージ
    public function getDamage(): int {
        return dice($this->getWeapon()) + $this->getStrBonus();
    }
    // 回避できるか？
    public function isDodge(BattlePc $offense): bool {
        $offense_num = dice("2d6") + $offense->getDexBonus();
        $defense_num = dice("2d6") + $this->getDexBonus();

        return $offense_num <= $defense_num;
    }

    public function heal(int $i) {
        $this->hp += $i;
        if ($this->hp > $this->max_hp) {
            $this->hp = $this->max_hp;
        }
    }
    public function damage(int $i) {
        $this->hp -= $i;
    }

    public function healMp(int $i) {
        $this->mp += $i;
        if ($this->mp > $this->max_mp) {
            $this->mp = $this->max_mp;
        }
    }
    public function useMp(int $i) {
        if ($this->mp < $i) {
            return false;
        }
        $this->mp -= $i;
        return true;
    }

    public function isDead(): bool {
        return $this->hp <= 0;
    }
}
