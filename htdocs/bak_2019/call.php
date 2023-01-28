<?php  // call.php

class TestCall {
    public function __call($name, $arguments) {
        echo "<pre>\n";
        echo "name: {$name}\n";
        var_dump($arguments);
        echo "</pre>\n";
        //
        return 1;
    }
}
//
$obj = new TestCall();
$i = $obj->__call('__call_a', []);
$obj->hoge(1,2,3);







