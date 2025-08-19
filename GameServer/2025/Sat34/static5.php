<?php  // static5.php

class Hoge {
    public static function func1() {
        // var_dump($this); // Fatal error: Uncaught Error: Using $this when not in object context in
    }
    public function funcNoStatic() {
        echo __METHOD__ , "<br>";
    }
}
//
// Hoge::func1();

//
Hoge::funcNoStatic(); //Fatal error: Uncaught Error: Non-static method Hoge::funcNoStatic() cannot be called statically in


