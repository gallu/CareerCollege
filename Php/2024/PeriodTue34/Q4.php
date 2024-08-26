<?php  // Q4.php

/*
 0から9までの整数を出力するプログラムを書きなさい。
 */
// for ($i = 0; $i <= 9; ++$i) {
for ($i = 0; $i < 10; ++$i) {
    echo "{$i},";
}
echo "<br>";

$i = 0;
// while($i !== 10) {
while($i < 10) {
    echo "{$i},";
    ++$i;
}
echo "<br>";

echo "0123456789";
echo "<br>";

foreach (range(0, 9) as $i) {
    echo "{$i},";
}
echo "<br>";

/*
Hello を10回繰り返して出力するプログラムを、for文を使って書きなさい。
 */
for ($i = 0; $i < 10; ++$i) {
    echo "Hello";
}
echo "<br>";

for ($i = 1; $i <= 10; ++$i) {
    echo "Hello";
}
echo "<br>";

/*
2 の、 1 乗から 8 乗までを計算し表示するプログラムをfor文かwhile文を使って書きなさい。
 */
// for ($i = 1; $i < 9; ++$i) {
for ($i = 1; $i <= 8; ++$i) {
    $num = 2 ** $i;
    echo "2の{$i}乗は {$num}です<br>";
}

/*
九九の4の段を表示するプログラムをfor文かwhile文を使って書きなさい。
 */
for ($i = 1;$i <= 9; ++$i) {
    echo 4 * $i, ",";
}











