<?php
// 2nd.php
function  get_card() {
    $card_list = [
      'コモン', 'レア', 'Sレア',
      'SSレア', 'SSSレア', 
    ];
    $i = mt_rand(0, count($card_list) - 1);
    return  $card_list[$i];
}
//$card = get_card();
//var_dump($card);

// モンテカルロ法によるテスト
$max = 100000;
$data = [];
for($i = 0; $i < $max; ++$i) {
    @$data[get_card()] ++;
}
//var_dump($data);
foreach($data  as  $k => $v) {
   printf("%s\t:\t%.4f<br>\n", $k, $v / $max * 100);
}
