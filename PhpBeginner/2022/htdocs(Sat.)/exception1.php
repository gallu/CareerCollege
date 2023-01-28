<?php  // exception1.php

try {
    //$fp = new SplFileObject("dummy");
    $fp = new SplFileObject( __FILE__ );
    var_dump($fp);
} catch(RuntimeException $e) {
    // エラーならここに入ってくる
    echo "catch RuntimeException <br>";
    echo $e->getMessage();
    return ; // エラーなので処理終了
}

echo "<br>fin<br>";
