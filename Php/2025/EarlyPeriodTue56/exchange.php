<?php  // exchange.php
declare(strict_types=1);
// 
class Exchange {
    private float $rate;

    public function __construct() {
        // APIからrateを取得
        // jsonを分解してレートを把握
        $this->rate = 147.72; // 1ドルが何円か？のレート
    }

    public function calculation(float|int $dollar): float|int {
        // 円の計算
        $yen = $dollar * $this->rate;
        return $yen;
    }
}

$eobj = new Exchange();

$d = 980;
echo "{$d}ドルは...";
$r = $eobj->calculation($d);
echo "{$r}円 <br>";

$d = 9.50;
echo "{$d}ドルは...";
$r = $eobj->calculation($d);
echo "{$r}円 <br>";
