<?php  // exception7.php
declare(strict_types=1);

try {
    throw new RuntimeException('run error');
} catch (Throwable $e) {
    echo $e->getmessage(), "<br>";
}
echo "fin. <br>";

// こっちは捕まえられないケース
try {
    throw new RuntimeException('run error 2');
} catch (Error $e) {
    echo $e->getmessage(), "<br>";
}
echo "fin2. <br>";
