<?php   // class4.php
declare(strict_types=1);

class Hoge {
    public function test() {
        echo "into Hoge::test <br>";
    }
    public function t2() {
        echo "into Hoge::t2 <br>";
    }
    public function t3() {
        echo "into Hoge::t3 <br>";
    }
    protected function t_pro() {
        echo "into Hoge::t_pro <br>";
    }
    private function t_private() {
        echo "into Hoge::t_private <br>";
    }
}
//
class Foo extends Hoge {
    public function t2() {
        echo "into Foo::t2 <br>";
    }
    public function t3() {
        parent::t3();
        echo "into Foo::t3 <br>";
    }
    //
    public function t() {
        $this->t_pro();
        //$this->t_private(); // Uncaught Error: Call to private method
    }
}
//
$obj = new Foo();
$obj->test(); // Fooに実装がなくても(Hogeにあるから)動く
$obj->t2(); // 上書き(override)されている
$obj->t3(); // 上書き(override)されている＋parentがある
//$obj->t_pro(); // Uncaught Error: Call to protected method
$obj->t(); // 

