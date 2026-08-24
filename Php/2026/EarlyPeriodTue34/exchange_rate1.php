<?php  // exchange_rate1.php

$json_string = '[{"date":"2026-07-14","base":"JPY","quote":"AUD","rate":0.00889},{"date":"2026-07-14","base":"JPY","quote":"CNY","rate":0.04177},{"date":"2026-07-14","base":"JPY","quote":"EUR","rate":0.0054},{"date":"2026-07-14","base":"JPY","quote":"GBP","rate":0.0046},{"date":"2026-07-14","base":"JPY","quote":"KRW","rate":9.2312},{"date":"2026-07-14","base":"JPY","quote":"TWD","rate":0.19812},{"date":"2026-07-14","base":"JPY","quote":"USD","rate":0.00616}]';
$rate_data = json_decode($json_string, true);

$jpy = 10000;
$to = 'TWD';

$rate = -1;
foreach ($rate_data as $rate_datum) {
    // var_dump($rate_datum);
    if ($rate_datum["quote"] === $to) {
        $rate = $rate_datum["rate"];
        break;
    }
}
// エラーチェック
if (-1 === $rate) {
    echo "{$to}という通貨には未対応です";
    exit;
}

$to_amount = $jpy * $rate;
echo "日本円で {$jpy} は、{$to}で{$to_amount}";
