<?php  // DnD1st.php
declare(strict_types=1);

require_once __DIR__ . "/dice2.php";

class PC {
    private int $str;
    private int $int;
    private int $wiz;
    private int $dex;
    private int $con;
    private int $chr;
    //
    private int $ac;

    public function __construct() {
        $this->str = dice("3d6");
        $this->int = dice("3d6");
        $this->wiz = dice("3d6");
        $this->dex = dice("3d6");
        $this->con = dice("3d6");
        $this->chr = dice("3d6");
        //
        $this->ac = dice("1d10") - 1; // XXX 本来は装備品による。今回は学習用なので乱数
    }

    public function debugPrint() {
        echo "AC: {$this->ac}<br>";
        echo "STR: {$this->str}<br>";
        echo "INT: {$this->int}<br>";
        echo "WIZ: {$this->wiz}<br>";
        echo "DEX: {$this->dex}<br>";
        echo "CON: {$this->con}<br>";
        echo "CHR: {$this->chr}<br>";
    }

    public function isHit(PC $defensePc) {
        $tac0 = 19;
        
        // 目標値を算出する
        $目標値 = $tac0 - $defensePc->ac;
        var_dump($defensePc->ac, $目標値);

        // 1d20を振る
        $d = dice("1d20");
        var_dump($d);
        
        // 目標値以上なら成功、未満なら失敗
        /*
        if ($d >= $目標値) {
            return true;
        } else {
            return false;
        }
        */
        return $d >= $目標値;
    }
}

$pc = new PC();
// var_dump($pc);
$pc->debugPrint();

$defensePc = new PC();

$r = $pc->isHit($defensePc);
var_dump($r);

$r = $defensePc->isHit($pc);







