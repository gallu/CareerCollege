<?php  // form_p.php

// var_dump( $_POST );
$hoge = $_POST["hoge"];

//  <script>alert('test');</script>
echo "あなたが入力したのは";
echo htmlspecialchars($hoge);
echo "ですね";
