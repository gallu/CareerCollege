<?php  // form.php

// var_dump($_GET);
// var_dump($_POST);

$hide = $_POST['hide'] ?? '';
var_dump($hide);

$in_1 = $_POST['in_1'] ?? '';
// echo "こんにちは" , $in_1 , "さん"; // XSS!! 危険！！ ダメ！！
echo "こんにちは" , htmlspecialchars($in_1) , "さん \n"; // PHP8.1以降
echo "こんにちは" , htmlspecialchars($in_1, ENT_QUOTES) , "さん \n"; // PHP8.0以前

$foods = $_POST['foods'] ?? [];
var_dump($foods);
