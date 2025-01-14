<?php  // BattleLogHeal.php

readonly class BattleLogHeal extends BattleLog {
    public function __construct(
        public string $name,
        public int $head_num,
    ){}

    public function __toString(): string {
        return "{$this->name}は{$this->head_num}点回復した!";
    }
}