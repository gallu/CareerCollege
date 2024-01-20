<?php  // blackjack_class.php
declare(strict_types=1);

// カード
class Card {
    public function __construct(
        public readonly string $suit,
        public readonly int $number,
    ) {
    }
    //
    public function __toString() {
        //
        $suit = $this->suit;
        $number = $this->number;
        
        // スートで色を変える
        if ( ("♥" === $suit)or("♦" === $suit) ) {
            $suit = "<span style='color:red'>{$suit}</span>";
        }
        // 1, 11以降は文字にする
        $number = match($number) {
            1 => "A",
            11 => "J",
            12 => "Q",
            13 => "K",
            default => (string)$number,
        };

        return "{$suit}{$number}";
    }
}

// 山札
class Deck {
    //
    public const SKEY = "deck";
    //
    public function create() {
        $suit = ["♠", "♣", "♥", "♦"];
        $deck = [];
        foreach($suit as $s) {
            for($i = 1; $i <= 13; ++$i) {
                // $deck[] = "{$s}{$i}";
                $deck[] = serialize(new Card($s, $i));
            }
        }
        // var_dump($deck);
        // デッキをshuffleする
        $deck = $this->shuffle($deck);
        //
        $_SESSION[self::SKEY] = $deck;
    }
    
    protected function shuffle(array $deck): array {
        // https://ja.wikipedia.org/wiki/%E3%83%95%E3%82%A3%E3%83%83%E3%82%B7%E3%83%A3%E3%83%BC%E2%80%93%E3%82%A4%E3%82%A7%E3%83%BC%E3%83%84%E3%81%AE%E3%82%B7%E3%83%A3%E3%83%83%E3%83%95%E3%83%AB
        // 要素数が n の配列 a をシャッフルする(添字は0からn-1):
        $n = count($deck);
        // i を 0 から n - 2 まで増加させながら、以下を実行する
        for($i = 0; $i <= ($n - 2); ++$i) {
            // j に i 以上 n 未満のランダムな整数を代入する
            $j = random_int($i, ($n - 1));
            // a[j] と a[i]を交換する
            $wk = $deck[$j];
            $deck[$j] = $deck[$i];
            $deck[$i] = $wk;
        }
        // var_dump($deck);
        return $deck;
    }
    
    public function count(): int {
        return count($_SESSION[Deck::SKEY] ?? []);
    }
    
    public function draw(): string {
        // 山札が０枚なら山札を作り直す
        if (0 === $this->count()) {
            $this->create();
        }  
        $card = array_pop($_SESSION[self::SKEY]);
        return $card;
    }
}

// 手札
class Hand {
    public const SKEY = "hand";
    
    public function get(): array {
        $hands = [];
        foreach ($_SESSION[self::SKEY] ?? [] as $h) {
            $hands[] = unserialize($h);
        }
        return $hands;
    }

    public function insert(string $card) {
        $_SESSION[self::SKEY] ??= []; // おまじない
        $_SESSION[self::SKEY][] = $card;
    }

    public function clear() {
        $_SESSION[self::SKEY] = [];
    }

    // 計算ロジック
    public function calculation(): int {
        return $this->calculationMain($this->get());
    }
    public function calculationMain(array $cards): int {
        $total = 0;
        $ace_flg = false;
        foreach($cards as $h) {
            if (11 <= $h->number) {
                $total += 10;
            } elseif (1 === $h->number) {
                $ace_flg = true;
                $total += 1;
            } else {
                $total += $h->number;
            }
        }
        // Aがあって11とカウントしたいケースの判定
        if ( (true === $ace_flg)&(21 >= ($total + 10)) ) {
            $total += 10;
        }
        return $total;
    }
}
