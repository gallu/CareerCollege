<?php  // form.php

// echo "ffff";
// var_dump( $_GET );
// var_dump( $_POST );

$hoge = $_POST["hoge"] ?? "default";
// var_dump($hoge);

// XSSがあるから ダメ！ 絶対！！
// echo "あなたが入力したのは" , $hoge , "です。";

echo "あなたが入力したのは" , htmlspecialchars($hoge) , "です。";
