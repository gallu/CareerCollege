<?php  // array3.php
echo "<pre>";

// 意味はないけど
$awk = [
    0 => 1, 
    1 => 2, 
    2 => 3, 
];
print_r($awk);

// やる意味はともかくとして、可能
$awk = [
    1 => 2,
    2 => 3,
    0 => 1,
];
print_r($awk);

//
$awk = [1, 2, 3, 4, 5, 6, 7];
unset( $awk[3] ); // 変数または配列要素の削除
unset( $awk[5] ); // 変数または配列要素の削除
print_r($awk);
// 「やめとけ」ケース
$len = count($awk);
for ($i = 0; $i < $len; ++$i) {
    echo "key {$i}, value {$awk[$i]} \n";
}
