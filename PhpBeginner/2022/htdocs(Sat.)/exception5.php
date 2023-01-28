<?php  // exception5.php

//
class MyOrgException extends Exception {
}

try {
    //throw new MyOrgException("オリジナルの例外");
    throw new Exception("オリジナルの例外");
} catch(MyOrgException $e) {
    // エラーならここに入ってくる
    echo "catch MyOrgException <br>";
    echo $e->getMessage();
    return ; // エラーなので処理終了
} catch(Throwable $e) {
    echo "catch Throwable <br>";
    echo $e->getMessage();
    return ; // エラーなので処理終了
}
