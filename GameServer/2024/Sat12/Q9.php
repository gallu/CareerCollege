<?php  // Q9.php

// 変数 str に12を代入しなさい。
// 変数 str を1.2倍した値を echoで出力しなさい。
$str = 12;
// $num = $str * 1.2;
// echo $num;
echo $str * 1.2;


echo "<br>";
// 変数 damage に、2から12の間の乱数を代入します。
// 変数 damage が8以上なら「致死ダメージ」をechoで出力しなさい。
// 変数 damage が7以下なら「ぎりセーフ」をechoで出力しなさい。

// 変数 damage に、2から12の間の乱数を代入します。
$damage = random_int(2, 12);

// 変数 damage が8以上なら「致死ダメージ」をechoで出力しなさい。
if ($damage >= 8) {
    echo "致死ダメージ";
}

// 変数 damage が7以下なら「ぎりセーフ」をechoで出力しなさい。
if ($damage <= 7) {
    echo "ぎりセーフ";
}

echo "<br>";
// 変数 damage に、2から12の間の乱数を代入します。
// 変数 damage が8以上なら「致死ダメージ」をechoで出力しなさい。
// 変数 damage が上述でなければ「ぎりセーフ」をechoで出力しなさい。
$damage = random_int(2, 12);

if ($damage >= 8) {
    echo "致死ダメージ";
} else {
    echo "ぎりセーフ";
}

echo "<br>";
// 変数 param に、1から４の乱数を代入します。
// 変数 param が 1なら「STR」をechoで出力
// 変数 param が 2なら「INT」をechoで出力
// 変数 param が 3なら「DEX」をechoで出力
// 変数 param が 上述以外なら「CON」をechoで出力
// するコードを、switch文で書きなさい
$param = random_int(1, 4);

switch($param) {
    case 1:
        echo "STR";
        break;
    case 2:
        echo "INT";
        break;
    case 3:
        echo "DEX";
        break;
    default:
        echo "CON";
        break;
}


echo "<br>";
// 「１から15までの数値を出力する」コードを、for文を使って書きなさい
for($i = 1; $i <= 15; ++$i) {
    echo "{$i},";
}
for($i = 0; $i < 15; ++$i) {
    echo $i + 1;
    echo ",";
}


echo "<br>";
// 「１から15までの数値を出力する」コードを、while文を使って書きなさい
$i = 1;
while($i <= 15) {
    echo "{$i},";
    ++$i;
}

echo "<br>";
// 変数 trpg に「D&D」「ソードワールド」「クトゥルフ」の３つの要素をもつ配列を代入しなさい
// 変数 trpg をvar_dump()で出力しなさい
$trpg = ["D&D", "ソードワールド", "クトゥルフ"];
var_dump($trpg);

echo "<br>";
// 変数 trpg に「D&D」「ソードワールド」「クトゥルフ」の３つの要素をもつ配列を代入しなさい
// foreachを使って、各要素の値をechoで出力するコードを書きなさい
$trpg = ["D&D", "ソードワールド", "クトゥルフ"];
foreach($trpg as $k => $v) {
    echo "{$v}<br>";
}

echo "<br>";
// 変数 pc に、以下の要素を持つ連想配列を作成しなさい
// キー: STR, 値: 18
// キー: INT, 値: 9
// キー: WIZ, 値: 12
// キー: CON, 値: 16
// 変数 pc をvar_dump()で出力しなさい
$pc = [
    "STR" => 18,
    "INT" => 9,
    "WIZ" => 12,
    "CON" => 16,
];
var_dump($pc);

echo "<br>";
// 変数 pc に、以下の要素を持つ連想配列を作成しなさい
// キー: STR, 値: 18
// キー: INT, 値: 9
// キー: WIZ, 値: 12
// キー: CON, 値: 16
// foreachを使って、各要素のkeyと値をechoで出力するコードを書きなさい
$pc = [
    "STR" => 18,
    "INT" => 9,
    "WIZ" => 12,
    "CON" => 16,
];
foreach($pc as $k => $v) {
    echo "{$k}: {$v} <br>";
}

echo "<br>";
// 定数 MAX_DAMAGE に 99999 を定義しなさい
// 定数 MAX_DAMAGE をechoで出力しなさい
define("MAX_DAMAGE", 99999);
// const MAX_DAMAGE = 99999;

echo MAX_DAMAGE;
