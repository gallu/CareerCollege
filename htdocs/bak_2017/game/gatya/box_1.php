<?php
//box_1.php
// 「新しくboxのリスト」を作る

// 基本になる「カードセット」の情報
$card_list = [
    'コモン'  => 70,
    'レア'    => 15,
    'Sレア'   => 10,
    'SSレア'  =>  4,
    'SSSレア' =>  1,
];

// カードの実際のセットを作る
$box_list = [];
foreach($card_list  as  $name => $num) {
    for($i = 0; $i < $num; ++$i) {
        $box_list[] = $name;
    }
}

// シャッフルする
// 要素数が n の配列 a をシャッフルする(添字は0からn-1):
$n = count($box_list);
// i を n - 1 から 1 まで減少させながら、以下を実行する
for($i = $n - 1; $i >= 1; --$i) {
    // j に 0 以上 i 以下のランダムな整数を代入する
    $j = mt_rand(0, $i);
    // a[j] と a[i]を交換する
    $wk = $box_list[$j];
    $box_list[$j] = $box_list[$i];
    $box_list[$i] = $wk;
}
//var_dump($box_list);
//var_dump(serialize($box_list));
//var_dump(json_encode($box_list));

// XXX本来であればDBに保存
// key=ユーザID, value=serialize($box_list)
session_start();
$_SESSION['box_list'] = serialize($box_list);

//
echo 'ok';
