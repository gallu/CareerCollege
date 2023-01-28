<?php  // lsb_1.php
// static‚Å‚Í‚È‚¢ƒNƒ‰ƒX‚ÅŽÀ‘•
class Hoge {
    protected function test() {
        echo "hoge#test\n";
    }
    protected function test_2() {
        echo "hoge#test2\n";
    }
    public function t() {
        $this->test();
        $this->test_2();
    }
}
//
class Foo extends Hoge {
    protected function test_2() {
        echo "foo#test2\n";
    }
}
//
$obj = new Hoge();
$obj->t();
//(new Hoge())->t();

//
(new Foo())->t();




