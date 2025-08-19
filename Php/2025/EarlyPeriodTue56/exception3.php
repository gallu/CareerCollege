<?php  // exception3.php
declare(strict_types=1);
/*
Throwable
    Error
    Exception
        RuntimeException
        LogicException
 */

try {
    throw new RuntimeException('hoge'); 
} catch (LogicException $e) {
    echo "catch LogicException <br>";
    echo $e::class , "<br>";
    echo $e->getmessage();    
} catch (Error|Exception $e) {
    echo "catch Error|Exception <br>";
    echo $e::class , "<br>";
    echo $e->getmessage();    
} catch (Throwable $e) {
    echo "catch Throwable <br>";
    echo $e::class , "<br>";
    echo $e->getmessage();
}
