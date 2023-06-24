<?php  // form.php

// var_dump($_GET);

$hoge = $_GET["hoge"];
// var_dump($hoge);

echo "あなたは";
echo htmlspecialchars($hoge);
echo "を入力しました";
