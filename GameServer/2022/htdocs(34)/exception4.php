<?php  // exception4.php

try {
    throw new Error("なんかエラー");
    echo "ここはとおる？";
/*
} catch(Throwable $e) {
    // エラーが発生した時の処理
    echo "into Throwable <br>";
    echo $e->getMessage();
    return; // エラーが起きたので処理を終了させる
*/
} catch(Exception $e) {
    // エラーが発生した時の処理
    echo "into Exception <br>";
    echo $e->getMessage();
    return; // エラーが起きたので処理を終了させる
} catch(Error $e) {
    // エラーが発生した時の処理
    echo "into Error <br>";
    echo $e->getMessage();
    return; // エラーが起きたので処理を終了させる
} catch(Throwable $e) {
    // エラーが発生した時の処理
    echo "into Throwable <br>";
    echo $e->getMessage();
    return; // エラーが起きたので処理を終了させる
}

echo "<br>fin<br>";