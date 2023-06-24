<?php  // form2.php

$hoge = $_POST["hoge"] ?? "";
// var_dump($hoge);

echo "あなたは";
echo htmlspecialchars($hoge);
echo "を入力しました";
