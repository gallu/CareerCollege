<?php  // exception3.php

/*
interface Throwable
    class Exception implements Throwable
    class Error implements Throwable
 */

try {
    throw new Error("なんかエラー");
    echo "ここはとおる？";
//} catch(Exception $e) {
//} catch(Error $e) {
} catch(Throwable $e) {
    // エラーが発生した時の処理
    echo "into Error <br>";
    echo $e->getMessage();
    return; // エラーが起きたので処理を終了させる
}

echo "<br>fin<br>";
