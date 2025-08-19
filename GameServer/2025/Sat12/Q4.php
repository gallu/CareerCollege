<?php  // Q4.php
/*
変数 score に、数値 345 を代入しなさい。
代入した後、変数 score を、var_dump で出力しなさい。
 */
$score = 345;
var_dump($score);
echo "<br>";

/*
変数 city に、文字列 beg begin All を代入しなさい。
代入した後、変数 city を、var_dumpで出力しなさい。
 */
$city = "beg begin All";
var_dump($city);
echo "<br>";

/*
以下のif文を書きなさい。
変数 company に、値 blue を代入しなさい
「変数 company が chair と等しい なら「OK」を echo で出力する」if文を書きなさい
 */
$company = "blue";
if ($company === "chair") {
    echo "OK(1) <br>";
}

/*
以下のif文を書きなさい。
変数 depth に、値 7 を代入しなさい
「変数 depth が 48 未満 なら「OK」を echo で出力する」if文を書きなさい
 */
$depth = 7;
if ($depth < 48) {
    echo "OK(2) <br>";
}

/*
以下のif文を書きなさい。
変数 company に、値 blue を代入しなさい
「変数 company が chair と等しい なら「OK」を echo で出力する」「そうでなければ「NG」をechoで出力する」if文を書きなさい
 */
$company = "blue";
if ($company === "chair") {
    echo "OK(3) <br>";
} else {
    echo "NG(3) <br>";
}

/*
以下のswitch文を書きなさい。
変数 price に、 数値 2 を代入しなさい。
・変数 price が 0 なら「HP + 0」と出力しなさい
・変数 price が 1 なら「HP + 10」と出力しなさい
・変数 price が 2 なら「HP + 100」と出力しなさい
・変数 price が 上述以外 なら「MP + 10」と出力しなさい
 */
$price = 2;
switch($price) {
    case 0:
        echo "HP + 0 <br>";
        break;
    case 1:
        echo "HP + 10 <br>";
        break;
    case 2:
        echo "HP + 100 <br>";
        break;
    default:
        echo "MP + 10 <br>";
        break;
}
