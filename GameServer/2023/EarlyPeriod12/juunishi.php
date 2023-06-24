<?php  // juunishi.php

// 参考にしたサイト
// https://www.tamana-uro.com/2009/12/23/%E9%99%A2%E9%95%B7%E3%81%93%E3%82%89%E3%82%80%E3%80%80%EF%BC%9A%E3%80%80%E9%82%84%E6%9A%A6/

$year = 2023;
echo $year;
echo "年の十二支は";

// 十二支は、西暦を１２で割り、同様に余りを求めます。それを、０：申、１：酉、２：戌、３：亥、４：子、５：丑、６：寅、７：卯、８：辰、９：巳、１０：午、１１：未に当てはめます
$eto = $year % 12;
echo $eto;
echo "です";

// 最低限の情報は出す
echo "<br>";
echo "０：申、１：酉、２：戌、３：亥、４：子、５：丑、６：寅、７：卯、８：辰、９：巳、１０：午、１１：未";
