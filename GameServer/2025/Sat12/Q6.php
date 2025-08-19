<?php  // Q6.php
/*
変数 data に、以下の4個の要素(文字列)を持つ配列を作成しなさい。
apple
cat
hello
lemon
代入した後、変数 data を、 print_r で出力しなさい。
 */
$data = [
    "apple",
    "cat",
    "hello",
    "lemon",
];
print_r($data);
echo "<br>";

/*
変数 list に、以下の3個の要素(文字列)を持つ配列を作成しなさい。
dog
green
cat
代入した後、変数 list の内容を、foreachを使って出力しなさい。
 */
$list = [
    "dog",
    "green",
    "cat",
];
foreach($list as $k => $v) {
    echo "{$k}: {$v}<br>";
}

