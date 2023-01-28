<?php  // exception4.php
/*
interface Throwable 
    class Exception implements Throwable
        class RuntimeException extends Exception 
    class Error implements Throwable
 */
try {
    throw new Error("なんかエラー");
    echo "ここは動く??? <br>";
} catch(Throwable $e) {
    echo "into catch <br>";
    echo $e->getMessage();
    return ; // エラーなんで処理続行が難しいのでここで処理を終わる
}

echo "<br>fin<br>";
