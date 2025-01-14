<?php  // BattleLogDamage.php

readonly class BattleLogDamage extends BattleLog {
    public function __construct(
        public string $offenseName,
        public string $defenseName,
        public int $damage,
    ){}

    public function __toString(): string {
        return "{$this->offenseName}の攻撃: {$this->defenseName}に {$this->damage}ダメージ";
    }
}
