<?php  // autogetter.php

class Hoge {
    private int $num;
    private string $name;
    private float $rate;

    public function __construct(int $num, string $name, float $rate) {
        $this->num = $num;
        $this->name = $name;
        $this->rate = $rate;
    }

    public function __call(string $name, array $arguments): mixed {
        // var_dump($name);
        if (false === str_starts_with($name, "get")) {
            throw new Exception("メソッドないよ！({$name})");
        }
        $pName = substr($name, 3);
        $pName = strtolower($pName);
        // var_dump($pName);
        
        return $this->$pName ?? throw new Exception("プロパティないよ！({$pName})");
    }
}

try {
    $obj = new Hoge(123, "2nd", 3.14);
    // var_dump($obj);
    $r = $obj->getNum();
    var_dump($r);
    $r = $obj->getRate();
    var_dump($r);

    $r = $obj->getAddress();
    var_dump($r);

// $obj->setNum(987);
} catch (Exception $e) {
    echo "ダメだった<br>";
    echo $e->getMessage();
}
