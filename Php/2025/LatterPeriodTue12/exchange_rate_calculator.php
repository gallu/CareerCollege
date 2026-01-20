<?php  // exchange_rate_calculator.php
// https://dev2.m-fr.net/アカウント名/exchange_rate_calculator.php

// https://wiki.krnk.org/ja/services/api-service/exchange-rate-api
$rates = [
  'status' => true,
  'datetime' => '2025-12-02T02:11:05.013Z',
  'rate' => [],
  'USD_JPY' => 155.624,
  'EUR_JPY' => 180.673,
  'GBP_JPY' => 205.596,
  'AUD_JPY' => 101.855,
  'NZD_JPY' => 89.121,
  'CAD_JPY' => 111.151,
  'CHF_JPY' => 193.42,
  'TRY_JPY' => 3.67,
  'ZAR_JPY' => 9.104,
  'MXN_JPY' => 8.501,
];

// ドル -> 円
$rate = $rates["USD_JPY"];

// 何ドルか？
$usDollar = 98.50;
// 上述は何円か？
$japaneseYen = $usDollar * $rate;
// 表示
echo "{$usDollar}ドルは {$japaneseYen}円 です。<br>";

// 円 -> ドル
$japaneseYen = 1000;
$usDollar = $japaneseYen / $rate;
echo "{$japaneseYen}円は {$usDollar}ドル です。<br>";
