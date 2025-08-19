<?php  // extends6.php

class Hoge {
    public function pubFunc() {
        echo __METHOD__ , "<br>";
    }
    protected function proFunc() {
        echo __METHOD__ , "<br>";
    }
    private function priFunc() {
        echo __METHOD__ , "<br>";
    }
}
class Foo extends Hoge {
    public function test() {
        echo "test start <br>";
        // $this->pubFunc();
        // $this->priFunc(); // Uncaught Error: Call to private method Hoge::priFunc() 
        $this->proFunc();

        echo "test end <br>";
    }
}

$fobj = new Foo();
$fobj->test();

// $fobj->pubFunc();
// $fobj->priFunc(); // Uncaught Error: Call to private method Hoge::priFunc() 
// $fobj->proFunc(); // Uncaught Error: Call to protected method Hoge::proFunc() 
