<?php  // exchange_rate2.php

$json_string = '[{"date":"2026-07-14","base":"JPY","quote":"AUD","rate":0.00889},{"date":"2026-07-14","base":"JPY","quote":"CNY","rate":0.04177},{"date":"2026-07-14","base":"JPY","quote":"EUR","rate":0.0054},{"date":"2026-07-14","base":"JPY","quote":"GBP","rate":0.0046},{"date":"2026-07-14","base":"JPY","quote":"KRW","rate":9.2312},{"date":"2026-07-14","base":"JPY","quote":"TWD","rate":0.19812},{"date":"2026-07-14","base":"JPY","quote":"USD","rate":0.00616}]';
$rate_data_base = json_decode($json_string, true);

$jpy = 10000;
$to = 'USD';

// データの加工
$rate_data = [];
foreach ($rate_data_base as $datum) {
    $rate_data[ $datum["quote"] ] = $datum["rate"];
}
// print_r($rate_data);

// エラーチェック
if (false === isset( $rate_data[$to] )) {
    echo "{$to}という通貨には未対応です";
    exit;
}

$rate = $rate_data[$to];
$to_amount = $jpy * $rate;
echo "日本円で {$jpy} は、{$to}で{$to_amount}";
