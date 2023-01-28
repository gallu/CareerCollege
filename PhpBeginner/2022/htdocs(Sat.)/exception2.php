<?php  // exception2.php

try {
    throw new Exception("なんかエラー");
} catch(Exception $e) {
    // エラーならここに入ってくる
    echo "catch Exception <br>";
    echo $e->getMessage();
    return ; // エラーなので処理終了
}

echo "<br>fin<br>";
