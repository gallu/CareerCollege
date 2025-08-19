<?php  // Q3.php

/*
変数 hp に、数値 174 を代入しなさい。
代入した後、変数 hp を、echo で出力しなさい。
*/
$hp = 174;
echo "{$hp} <br>";

/*
変数 status に、文字列 little feather forth を代入しなさい。
代入した後、変数 status を、var_dumpで出力しなさい。
 */
$status = "little feather forth";
var_dump($status);
echo "<br>";

/*
変数 gender に、値 banana を代入しなさい
「変数 gender が music と等しい なら「OK」を echo で出力する」if文を書きなさい
 */
$gender = "banana";
if ($gender === "music") {
    echo "OK <br>";
}

/*
変数 level に、値 35 を代入しなさい
「変数 level が 77 以上 なら「OK」を echo で出力する」if文を書きなさい
 */
$level = 35;
if ($level >= 77) {
    echo "OK <br>";
}
