<?php  // Chain.php
/*
APIのcall前のパラメタで、順不同だけど「いくつかの設定項目」がある
*/
class Chain {
    private string $name;
    private int $age;
    private string $address;
    private string $zip; // 郵便番号

    public function setName(string $v): self {
        $this->name = $v;
        return $this;
    }
    public function setAge(int $v): self|null {
        if (0 > $v) {
            return null;
        }
        $this->age = $v;
        return $this;
    }
    public function setAddress(string $v): self {
        $this->address = $v;
        return $this;
    }
    public function setZip(string $v): self {
        $this->zip = $v;
        return $this;
    }
}
//
$obj = new Chain()
    ?->setName("なまえ")
    ?->setAge(-1)
    ?->setAddress("高田馬場")
    ?->setZip("123-4567");
var_dump($obj);
