<?php  // excep2.php
declare(strict_types=1);

try {
    echo "Hoge <br>";
    throw new Exception("test exp");
    echo "Foo <br>";

} catch (Exception $e) {
    echo "into catch <br>";
    echo $e->getMessage() , "<br>";
}

echo "fin. <br>";
