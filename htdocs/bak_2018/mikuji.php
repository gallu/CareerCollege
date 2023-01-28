<?php
// mikuji.php
// 「おみくじの束」を用意する
$mikuji_box = [
    '大吉' , 
    '中吉' , 
    '小吉' , 
    '末吉' , 
    '吉' , 
    '凶' , 
    '大凶' , 
];
//var_dump( $mikuji_box );
$count = count($mikuji_box);
//var_dump($count);

// 「おみくじの束」から１つ、引く
$i = mt_rand(0, $count - 1);
//var_dump($i);

// 引いた番号の紙を取り出す
$mikuji_string = $mikuji_box[$i];
//var_dump($mikuji_string);

// jsonで返却する
$ret['contents'] = $mikuji_string;
header('Content-type: application/json');
echo  json_encode($ret);

/*
// 表示する
?><html>
<h1>おみくじ結果</h1>
おみくじの結果は <b><?php echo $mikuji_string; ?></b> です。

</html>
*/
