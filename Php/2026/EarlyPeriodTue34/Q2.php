<?php  // Q2.php
/*
変数 projectName に、文字列 table を代入しなさい
「変数 projectName が 文字列 chair と等しい なら「ok」を echo で出力する」if文を書きなさい
*/
$projectName = "table";
if ($projectName === "chair") {
    echo "ok <br>";
}

/*
変数 luck に、値 80 を代入しなさい
「変数 luck が 79 以下 なら「ok」を echo で出力する」if文を書きなさい
*/
$luck = 80;
if ($luck <= 79) {
    echo "ok <br>";
}

/*
変数 area に、値 61 を代入しなさい
「変数 area が 48 と等しくない なら「ok」を echo、そうでなければ「ng」を echo で出力する」if-else文を書きなさい
*/
$area = 61;
if ($area !== 48) {
    echo "ok <br>";
} else {
    echo "ng <br>";
}

