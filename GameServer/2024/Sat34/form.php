<?php  // form.php

// var_dump( $_GET );
// var_dump( $_POST );

$hoge = $_POST["hoge"] ?? 'default';
// var_dump($hoge);

// XSS対策として、htmlspecialchars()はちゃんと書く！！
echo "入力したのは", htmlspecialchars($hoge), "ですね。";

