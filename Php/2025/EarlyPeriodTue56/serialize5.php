<?php  // serialize5.php
class Hoge {
    public function __construct(
        private int $num,
        private string $name,
        private float $rate,
    ) {}
    
    public function __serialize(): array {
        return [
            'num' => $this->num,
            'name' => $this->name,
            'rate' => $this->rate,
        ];
    }
    public function __unserialize(array $data): void {
        $this->num = $data["num"];
        $this->name = $data["name"];
        $this->rate = $data["rate"];
    }
}

$obj = new Hoge(num: 123, name: "name", rate: 3.14);
$s = serialize($obj);
$obj2 = unserialize($s);
var_dump($obj2);
