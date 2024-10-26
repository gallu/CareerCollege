<?php  // multi_excep2.php

class HogeException extends RuntimeException {
}
class FooException extends RuntimeException {
}
class BarException extends RuntimeException {
}

try {
    throw new HogeException();
} catch(RuntimeException $e) {
    // XXX 好ましくない書き方
    if ($e::class === HogeException::class) {
        echo "catch: HogeException <br>\n";
    }
    if ($e::class === FooException::class) {
        echo "catch: FooException <br>\n";
    }
    if ($e::class === BarException::class) {
        echo "catch: BarException <br>\n";
    }
}

echo "fin. <br>\n";
