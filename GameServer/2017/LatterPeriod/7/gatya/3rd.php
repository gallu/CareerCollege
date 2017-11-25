<?php
// 3rd.php
function  set_card_list($list, $name, $num) {
    for($i = 0; $i < $num; ++$i) {
        $list[] = $name;
    }
    return $list;
}
//
$card_list = [];
$card_list = set_card_list($card_list, 'コモン', 70);
$card_list = set_card_list($card_list, 'レア'  , 15);
$card_list = set_card_list($card_list, 'Sレア',  10);
$card_list = set_card_list($card_list, 'SSレア',  4);
$card_list = set_card_list($card_list, 'SSSレア', 1);
//var_dump( $card_list );

//
function  get_card($card_list) {
    $i = mt_rand(0, count($card_list) - 1);
    return  $card_list[$i];
}

// モンテカルロ法によるテスト
$max = 100000;
$data = [];
for($i = 0; $i < $max; ++$i) {
    @$data[get_card($card_list)] ++;
}
//var_dump($data);
foreach($data  as  $k => $v) {
   printf("%s\t:\t%.4f<br>\n", $k, $v / $max * 100);
}


