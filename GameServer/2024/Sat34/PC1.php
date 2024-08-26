<?php  // PC1.php
declare(strict_types=1);

class PC {
    private int $hp;
    
    public function __construct(int $v) {
        $this->hp = $v;
    }

    public function getHp(): int {
        return $this->hp;
    }

    public function damage(int $d) {
        echo "{$d}ダメージ!! <br>";
        $this->hp -= $d;
    }
}

$pc = new PC(100);
var_dump($pc);
echo "<br>";

$pc->damage( random_int(1, 30) );
echo $pc->getHp() , "Hp <br>";
