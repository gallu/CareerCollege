<?php  // Q6.php
/*
"1st", "2nd", "3rd" の3つの要素を持つ配列を作成しなさい。
作成した配列を、print_r または var_dump で出力しなさい。
 */
$arr = ["1st", "2nd", "3rd"];
var_dump($arr);
print_r($arr);

/*
数値「111」、「222」、「333」 の3つの要素を持つ配列を作成しなさい。
作成した配列を、print_r または var_dump で出力しなさい。
 */
$arr = [
    111,
    222,
    333,
];
var_dump($arr);
print_r($arr);

/*
 「1から10までの整数のうち偶数だけ」を要素にもつ配列を作成しなさい。
作成した配列を、print_r または var_dump で出力しなさい。
 */
$arr = [2,4,6,8,10];
var_dump($arr);
echo "<br>";

/*
 「1から10までの整数のうち偶数だけ」を要素にもつ配列を、for文を使って作成しなさい。
作成した配列を、print_r または var_dump で出力しなさい。
 */
$arr = [];
for ($i = 1; $i <= 10; ++$i) {
    // if ($i % 2 === 0) {
        // echo "{$i}, ";
    // }
    if ($i % 2 === 1) {
        continue;
    }
    echo "{$i}, ";
    // $arr[$i] = $i;
    $arr[] = $i;
}
var_dump($arr);

/*
 値に、数値で「11, 33, 55, 77」が入っている配列があります。
 配列の各要素をechoで出力するコードを書きなさい。
 */
$arr = [11, 33, 55, 77];

echo $arr[0];
echo $arr[1];
echo $arr[2];
echo $arr[3];
echo "<br>";

/*
 値に、数値で「11, 33, 55, 77」が入っている配列があります。
 配列の各要素をechoで出力するコードを、ループ構文を使って書きなさい。
 */
for ($i = 0; $i < count($arr); ++$i) {
    echo $arr[$i];
}
echo "<br>";

foreach ($arr as $v) {
    echo $v;
}
echo "<br>";










