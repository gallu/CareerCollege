<?php   // exception3.php
/*
interface Throwable
    class Exception implements Throwable
    class Error implements Throwable
 */
try {
    throw new Error("なんかエラー");
//} catch(Exception $e) {
//} catch(Error $e) {
} catch(Throwable $e) {
    // エラーならここに入ってくる
    echo "catch Exception <br>";
    echo $e->getMessage();
    return ; // エラーなので処理終了
}

echo "<br>fin<br>";
