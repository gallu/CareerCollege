<?php   // exception3.php

class HogeException extends Exception {
}
//
try {
    //
    throw new HogeException("hogera mugera");

} catch(HogeException $e) {
    echo "into HogeException <br>";
    echo $e->getMessage();
    return ;
} catch (\Throwable $e) {
    echo "into Throwable <br>";
    echo $e->getMessage();
}

