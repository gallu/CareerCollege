<?php  // omikuji.php

//　おみくじのセットを準備する
$mikuji_box = [
    "大吉",
    "中吉",
    "小吉",
    "末吉",
    "吉",
    "凶",
    "大凶",
];
// var_dump($mikuji_box);

// おみくじの番号を引く
$mikuji_count = count($mikuji_box);
// var_dump($mikuji_count);
$mikuji_max = $mikuji_count - 1;
// var_dump($mikuji_max);
$no = random_int(0, $mikuji_max);
// var_dump($no);

//　引いた番号の文章を取り出す
$mikuji_str = $mikuji_box[ $no ];
// var_dump($mikuji_str);

//　取り出した文章を出力する
?>
<!doctype html>

あなたの運勢は <?php echo $mikuji_str; ?> です！！
