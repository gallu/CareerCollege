<?php  // omikuji.php

// おみくじのセットを用意する
$omikuji_box = [
    "大吉",
    "中吉",
    "小吉",
    "吉",
    "末吉",
    "凶",
    "大凶",
];
// print_r($omikuji_box);

// 番号を１つ得る
$omikuji_count = count($omikuji_box);
$omikuji_max = $omikuji_count - 1;
// var_dump($omikuji_max);
$no = random_int(0, $omikuji_max);
// var_dump($no);

// 番号に対応した紙を取る
$omikuji_string = $omikuji_box[ $no ];

// 出力する
?>
<!DOCTYPE html>
今日のあなたの運勢は「
<?php echo $omikuji_string; ?>
 」です！！
