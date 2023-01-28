<?php
// 5th_new.php
function  get_card($card_list) {
    $base = 0;
    $max = 0;
    foreach($card_list as $name => $num) {
        $max += $num;
    }
    $rand = mt_rand(0, $max - 1);
    //
    foreach($card_list as $name => $num) {
        $base += $num;
        if ($base > $rand) {
            return $name;
        }
    }
    // ありえない遷移、とする
    return 'null';
}
//
$card_list = [
    'コモン'  => 700,
    'レア'    => 150,
    'Sレア'   => 100,
    'SSレア'  =>  49,
    'SSSレア' =>   1,
];

// モンテカルロ法によるテスト
$max = 1000000;
$data = [];
for($i = 0; $i < $max; ++$i) {
    @$data[get_card($card_list)] ++;
}
//var_dump($data);
foreach($data  as  $k => $v) {
   printf("%s\t:\t%.4f<br>\n", $k, $v / $max * 100);
}


