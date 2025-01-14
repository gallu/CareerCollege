<?php  // judge2.php
declare(strict_types=1);
require_once __DIR__ . "/dice2.php";

class Judge {
    // GURPS の判定
    // 3d6 の下方ロール
    public function isJudge($目標値): object {
        // ダイスをふる
        $d = dice("3d6");
        $r = $d <= $目標値;
        
        return new readonly class($d, $r) {
            public int $dice;
            public bool $success;
            public function __construct($d, $r){
                $this->dice = $d;
                $this->success = $r;
            }
        };
    }
}

$obj = new Judge();
$r = $obj->isJudge(11);
var_dump($r);

