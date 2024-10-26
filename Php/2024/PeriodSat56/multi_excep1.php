<?php  // multi_excep1.php

class HogeException extends RuntimeException {
}
class FooException extends RuntimeException {
}
class BarException extends RuntimeException {
}

try {
    throw new HogeException();
} catch(RuntimeException $e) {
    echo "catch:" , $e->getMessage();
    echo "<br>\n";
}

echo "fin. <br>\n";

