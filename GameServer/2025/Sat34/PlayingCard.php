<?php  // PlayingCard.php

class PlayingCard {
    private string $suit;   // スート（♠, ♥, ♦, ♣）
    private string $rank;   // ランク（A, 2, 3, ..., K）

    public function __construct(string $suit, string $rank) {
        // XXX validation
        $this->suit = $suit;
        $this->rank = $rank;
    }

    public function toString(): string {
        return "{$this->suit}{$this->rank}";
    }
    
    public function getRank(): string {
        return $this->rank;
    }
}

