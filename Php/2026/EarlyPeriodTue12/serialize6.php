<?php  // serialize6.php
declare(strict_types=1);

class Hoge {
    // serialize用プロパティ一覧
    private const PROPERTIES_NAME = [
        'num',
        'rate',
        'name',
        'flg',
        'arr',
        'obj',
    ];

    public function __construct(
        private int $num,
        private float $rate,
        private string $name,
        private bool $flg,
        private array $arr,
        private $fp, // stream
        private stdClass $obj, // インスタンス
    ){}

    public function __serialize(): array {
        // return [
            // "num" => $this->num,
            // "rate" => $this->rate,
            // "name" => $this->name,
            // "flg" => $this->flg,
            // "arr" => $this->arr,
            // "obj" => $this->obj,
        // ];
        $ret = [];
        foreach (self::PROPERTIES_NAME as $p) {
            $ret[$p] = $this->$p;
        }
        return $ret;
    }
    public function __unserialize(array $data): void {
        // $this->num = $data["num"];
        // $this->rate = $data["rate"];
        // $this->name = $data["name"];
        // $this->flg = $data["flg"];
        // $this->arr = $data["arr"];
        // $this->obj = $data["obj"];
        foreach (self::PROPERTIES_NAME as $p) {
            $this->$p = $data[$p];
        }
        $this->fp = fopen(__FILE__, "r"); // XXX
    }
}
//
$obj = new Hoge (
    123,
    3.14,
    "hogera",
    true,
    [1, 2],
    fopen(__FILE__, "r"),
    new stdClass(),
);
var_dump($obj);

$s = serialize($obj);
$obj2 = unserialize($s);
var_dump($obj2);

