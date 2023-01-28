<?php  // exception1.php

try {
    //$fp = new SplFileObject("dummy");
    $fp = new SplFileObject(__FILE__);
    var_dump($fp);
} catch(RuntimeException $e) {
    // エラーが起きた時の処理
    echo "into catch <br>";
    echo $e->getMessage();
    return ; // エラーなんで処理続行が難しいのでここで処理を終わる
}

echo "<br>fin <br>";
