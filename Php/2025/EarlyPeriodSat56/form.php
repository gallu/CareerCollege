<?php  // form.php

// var_dump($_GET);
// var_dump($_POST);

// データを取得して
$email = $_POST["email"];

// 出力: XXX危険! ダメ！！ 絶対！！！
// XSS cross-site scripting
// <script>alert("test");</script>
// <img src="https://dengekionline.com/images/6ocu/1QIx/0GNd/yu53/A7KLZOwiP14BHJCyoUOVw0QujilL1bh8oQC0tdibqSzEaEKrAn6pNbdsGKI9zdAt10nZLJpRWUCjT2Fn_main.webp">
// echo "あなたのメアドは" , $email , "です";

// 「必ず」エスケープして出力すること
// echo "あなたのメアドは" , htmlspecialchars($email) , "です";
echo htmlspecialchars("あなたのメアドは {$email} です");

