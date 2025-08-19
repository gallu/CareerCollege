<?php  // autogetter2.php

class Hoge {
    private const array PARAMS = [
        "num" => true,
        "name" => true,
        "rate" => true,
    ];
    private array $data;

    public function __construct(int $num, string $name, float $rate) {
        $this->data["num"] = $num;
        $this->data["name"] = $name;
        $this->data["rate"] = $rate;
    }

    public function __call(string $name, array $arguments): mixed {
        // var_dump($name);
        if (false === str_starts_with($name, "get")) {
            throw new Exception("メソッドないよ！({$name})");
        }
        $pName = substr($name, 3);
        $pName = strtolower($pName);
        // var_dump($pName);
        
        return $this->$pName;
    }
    public function __get(string $name): mixed {
        if (false === isset(self::PARAMS[$name])) {
            throw new Exception("プロパティないよ！({$name})");
        }
        return $this->data[$name];
    }
}
//
try {
    $obj = new Hoge(123, "2nd", 3.14);
    // var_dump($obj);
    $r = $obj->getName();
    var_dump($r);
} catch (Exception $e) {
    echo "ダメだった<br>";
    echo $e->getMessage();
}


