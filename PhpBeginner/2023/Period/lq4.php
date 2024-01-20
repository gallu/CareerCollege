<?php  // lq4.php
/*
問
送られてきたデータを取得して表示しなさい。
なお、出力時にセキュリティを考慮しなさい。
 */
// var_dump($_GET);
// var_dump($_POST);

$q1 = $_POST["q1"] ?? "";
$q2 = $_POST["q2"] ?? "";
// var_dump($q1, $q2);

echo htmlspecialchars($q1) , "<br>\n";
echo htmlspecialchars($q2) , "<br>\n";
