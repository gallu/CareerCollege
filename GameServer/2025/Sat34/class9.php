<?php  // class9.php
declare(strict_types=1);

class Hoge {
    private string $name;
    
    public function __construct(string $v) {
        if ($v === "") {
            throw new RuntimeException("お名前が空っぽだよ？");
        }
        $this->name = $v;
    }
    public function getName(): string {
        return $this->name;
    }
}

try {
    $obj = new Hoge("");
    echo "お名前は " , $obj->getName(), " です";
} catch (RuntimeException $e) {
    echo "例外捕捉 <br>";
    echo $e->getMessage();
}
