<?php   // exception6.php

try {
    throw new Error("なんかエラー");
    echo "ここは動く??? <br>";
/*
} catch(Throwable $e) {
    echo "into Throwable catch <br>";
    echo $e->getMessage();
    return ; // エラーなんで処理続行が難しいのでここで処理を終わる
*/
} catch(Exception $e) {
    echo "into Exception catch <br>";
    echo $e->getMessage();
    return ; // エラーなんで処理続行が難しいのでここで処理を終わる
} catch(Error $e) {
    echo "into Error catch <br>";
    echo $e->getMessage();
    return ; // エラーなんで処理続行が難しいのでここで処理を終わる
} catch(Throwable $e) { // Throwable は、書くんなら「一番下」に書くこと！！
    echo "into Throwable catch <br>";
    echo $e->getMessage();
    return ; // エラーなんで処理続行が難しいのでここで処理を終わる
}

echo "<br>fin<br>";