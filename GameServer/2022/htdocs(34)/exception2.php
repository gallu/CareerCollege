<?php  // exception2.php

try {
    throw new Exception("なんかエラー");
    echo "ここはとおる？";
} catch(Exception $e) {
    // エラーが発生した時の処理
    echo "into Exception <br>";
    echo $e->getMessage();
    return; // エラーが起きたので処理を終了させる
}

echo "<br>fin<br>";
