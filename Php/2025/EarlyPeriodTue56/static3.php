<?php  // static3.php

class Hoge {
    public function func() {
        echo __METHOD__ , "<br>";
    }
}
// Fatal error: Uncaught Error: Non-static method Hoge::func() 
Hoge::func();

