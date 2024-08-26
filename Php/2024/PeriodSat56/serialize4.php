<?php  // serialize4.php
declare(strict_types=1);

class Hoge {
    public int $num;

    public function __serialize(): array {
        echo "call __serialize() \n\n";
        return [
            'num' => $this->num,
        ];
    }

    public function __unserialize(array $data): void {
        var_dump($data);
        echo "call __unserialize() \n\n";
        $this->num = $data['num'];
    }
}

$obj = new Hoge();
$obj->num = 123;
var_dump($obj);
echo "\n";

$s = serialize($obj);
var_dump($s);

$obj2 = unserialize($s);
var_dump($obj2);
echo "\n";

