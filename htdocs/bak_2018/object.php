<?php // object.php

// インスタンスの作成
$obj = new stdClass();
var_dump($obj);

// 例外の投げ方/受け取り方
try {
    echo "in to try before throw<br>\n";
    throw new Exception('hoge error');
    echo "in to try after throw<br>\n";
} catch(Exception $e) {
    //var_dump($e);
    echo $e->getMessage();
}
