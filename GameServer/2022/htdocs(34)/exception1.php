<?php  // exception1.php

try {
    //$fp = new SplFileObject("dummy");
    $fp = new SplFileObject(__FILE__);
    var_dump($fp);
} catch(RuntimeException $e) {
    // エラーが発生した時の処理
    echo "into RuntimeException <br>";
    echo $e->getMessage();
    return; // エラーが起きたので処理を終了させる
}

echo "<br>fin<br>";
