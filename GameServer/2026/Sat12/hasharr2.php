<?php  // hasharr2.php
echo "<pre>";

$hash = [
	"HP" => 100,
	"MP" => 50,
];
print_r($hash);

// 要素を１つ取り出す
$hp = $hash["HP"];
var_dump($hp);
// 要素を1つ上書きする
$hash["HP"] = 150;
print_r($hash);
// 要素を追加する
$hash["name"] = "ほげ";
print_r($hash);

// 要素の個数を数える(あんまりやらない、けど、できる)
$num = count($hash);
echo "num is {$num} \n";

// 配列を反復処理する(配列をぶんまわす)(あんまりやらない、けど、できる)
foreach ($hash as $k => $v) {
	echo "{$k}: {$v} \n";
}
