<?php  // BattleLogMpEmpty.php

readonly class BattleLogMpEmpty extends BattleLog {
    public function __construct(
        public string $name,
        public string $spell_type,
    ){}

    public function __toString(): string {
        return "MP不足で{$this->name}は{$this->spell_type}呪文を唱えられなかった orz";
    }
}