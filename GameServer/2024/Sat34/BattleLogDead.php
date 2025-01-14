<?php  // BattleLogDead.php

readonly class BattleLogDead extends BattleLog {
    public function __construct(
        public string $deadName,
    )
    {}

    public function __toString(): string {
        return "{$this->deadName} は死亡した......";
    }
}
