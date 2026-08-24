<?php  // json.php

$json_string = '[{"date":"2026-07-14","base":"JPY","quote":"AUD","rate":0.00889},{"date":"2026-07-14","base":"JPY","quote":"CNY","rate":0.04177},{"date":"2026-07-14","base":"JPY","quote":"EUR","rate":0.0054},{"date":"2026-07-14","base":"JPY","quote":"GBP","rate":0.0046},{"date":"2026-07-14","base":"JPY","quote":"KRW","rate":9.2312},{"date":"2026-07-14","base":"JPY","quote":"TWD","rate":0.19812},{"date":"2026-07-14","base":"JPY","quote":"USD","rate":0.00616}]';
$json = json_decode($json_string, true);
var_dump($json);
