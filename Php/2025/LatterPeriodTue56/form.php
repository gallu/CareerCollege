<?php  // form.php

// var_dump($_GET);
// var_dump($_POST);

// どっちか
$hoge = strval($_POST["hoge"] ?? "");
$hoge = (string)($_POST["hoge"] ?? ""); // null合体演算子のあたりの括弧を忘れないように!!


// XXX 絶対やっちゃだめ!!!
// *** XSS脆弱性 ***
// echo "入力は {$hoge} です";

// こうやろう
echo "入力は", htmlspecialchars($hoge), "です";

// こっちでもいい
$e_hoge = htmlspecialchars($hoge);
echo "入力は {$e_hoge} です";
