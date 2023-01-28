<?php  // exception7.php

// カスタムした例外
class MyHogeException extends Exception {
}
//
class MyFooException extends Exception {
}

//
try {
    throw new MyHogeException("なんかエラー");
    echo "ここは動く??? <br>";
} catch(MyFooException $e) {
    echo "into MyFooException catch <br>";
    echo $e->getMessage();
    return ; // エラーなんで処理続行が難しいのでここで処理を終わる
} catch(MyHogeException $e) {
    echo "into MyHogeException catch <br>";
    echo $e->getMessage();
    return ; // エラーなんで処理続行が難しいのでここで処理を終わる
} catch(Exception $e) {
    echo "into Exception catch <br>";
    echo $e->getMessage();
    return ; // エラーなんで処理続行が難しいのでここで処理を終わる
} catch(Throwable $e) { // Throwable は、書くんなら「一番下」に書くこと！！
    echo "into Throwable catch <br>";
    echo $e->getMessage();
    return ; // エラーなんで処理続行が難しいのでここで処理を終わる
}