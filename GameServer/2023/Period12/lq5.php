<?php  // lq5.php
/*
問
lq5.html で送信された２つの値を取得するコードを書きなさい。
その後、取得した値を出力しなさい。
出力するときはセキュリティに気をつけなさい。
 */
$q1 = $_POST["q1"] ?? "";
$q2 = $_POST["q2"] ?? "";

echo htmlspecialchars($q1);
echo htmlspecialchars($q2);
