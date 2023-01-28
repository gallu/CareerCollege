<?php  // exception2.php

try {
    throw new Exception("なんかエラー");
    echo "ここは動く??? <br>";
} catch(Exception $e) {
    echo "into catch <br>";
    echo $e->getMessage();
    return ; // エラーなんで処理続行が難しいのでここで処理を終わる
}

echo "<br>fin<br>";
