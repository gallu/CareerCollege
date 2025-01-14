<?php  // judge1.php
declare(strict_types=1);
require_once __DIR__ . "/dice2.php";

class Judge {
    // SW無印 の判定
    // 2d6 上方ロール
    public function isJudge($目標値): object {
        // ダイスをふる
        $d = dice("2d6");
        $r = $d >= $目標値;
        
        return new readonly class($d, $r) {
            public function __construct(
                public int $dice,
                public bool $success,
            ){}
        };
    }
}

$obj = new Judge();
$r = $obj->isJudge(7);
var_dump($r);
