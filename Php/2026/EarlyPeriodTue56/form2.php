<?php  // form2.php

// var_dump($_POST);

$check = $_POST["check"] ?? [];
var_dump($check);

// 
$name = $_POST["name"] ?? [];
$name_e = htmlspecialchars($name); // 必須！！！！！
echo "あなたのお名前は {$name_e} ですね", "<br>";

echo htmlspecialchars("あなたのお名前は {$name} ですね");
