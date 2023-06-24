<?php  // function2.php

function test(string $hoge, string $foo) {
    echo "hoge is {$hoge} <br>\n";
    echo "foo is {$foo} <br>\n";
}

test('hoge_value', 'foo_value');

test(foo:'foo_value', hoge:'hoge_value');
