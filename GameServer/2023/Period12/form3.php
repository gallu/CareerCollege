<?php  // form3.php

// var_dump($_GET);
// var_dump($_POST);

$name = $_POST["name"]  ??  "";
$age = $_POST["age"]  ??  "";

// 本当は validate をやる

echo "お名前は";
echo htmlspecialchars($name);
echo "、年齢は";
echo htmlspecialchars($age);
