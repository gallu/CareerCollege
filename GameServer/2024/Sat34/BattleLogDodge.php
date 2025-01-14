<?php  // BattleLogDodge.php

readonly class BattleLogDodge extends BattleLog {
    public function __construct(
        public string $offenseName,
        public string $defenseName,
    ){}

    public function __toString(): string {
        return "{$this->defenseName}は攻撃を回避した！！";
    }
}