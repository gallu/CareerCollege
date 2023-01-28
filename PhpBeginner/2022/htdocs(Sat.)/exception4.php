<?php   // exception4.php

try {
    throw new Error("なんかエラー");
/*
} catch(Throwable $e) {
    echo "catch Throwable <br>";
    echo $e->getMessage();
    return ; // エラーなので処理終了
*/
} catch(Exception $e) {
    // エラーならここに入ってくる
    echo "catch Exception <br>";
    echo $e->getMessage();
    return ; // エラーなので処理終了
} catch(Error $e) {
    echo "catch Error <br>";
    echo $e->getMessage();
    return ; // エラーなので処理終了
} catch(Throwable $e) {
    echo "catch Throwable <br>";
    echo $e->getMessage();
    return ; // エラーなので処理終了
}

echo "<br>fin<br>";
