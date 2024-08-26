<?php  // static7.php

class StaticHoge {
    public static function func() {
        // var_dump($this); // Fatal error: Uncaught Error: Using $this when not in object context in
    }

    public function test() {
        echo __METHOD__ , "<br> \n";
    }

}

StaticHoge::func();

// StaticHoge::test(); // Fatal error: Uncaught Error: Non-static method
