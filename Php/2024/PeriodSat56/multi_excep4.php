<?php  // multi_excep4.php

class HogeException extends RuntimeException {
}
class FooException extends RuntimeException {
}
class BarException extends RuntimeException {
}

try {
    throw new HogeException();
} catch(HogeException | FooException $e) {
    echo "catch: HogeException or FooException <br>\n";
} catch(BarException $e) {
    echo "catch: BarException <br>\n";
} catch(Throwable $e) {
    echo "catch: 捕捉不能例外 <br>\n";
}

echo "fin. <br>\n";
