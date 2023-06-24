<?php  // form.php

// var_dump( $_GET );
$hoge = $_GET["hoge"];

//  <script>alert('test');</script>
echo "あなたが入力したのは";
echo htmlspecialchars($hoge);
echo "ですね";
