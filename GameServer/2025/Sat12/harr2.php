<?php  // harr2.php

echo "<pre>";
$harr = [
    "HP" => 100,
    "MP" => 50,
    "name" => "勇者ロト",
];
print_r($harr);

// 要素から1つ取り出す
$hp = $harr["HP"];
echo "hp is {$hp} \n";
// 要素の1つを上書きする
$harr["HP"] = $harr["HP"] - 20;
print_r($harr);

// 要素に1つ追加する
$harr["Weapon"] = "ひのきの棒";
print_r($harr);

// 配列の「要素の数」を取得する（あんまりやらない)
$num = count($harr);
echo "count is {$num} \n";

// 繰り返し処理
foreach ($harr as $k => $v) {
    echo "{$k}: {$v} \n";
}
