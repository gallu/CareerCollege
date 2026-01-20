<?php  // location.php
ob_start();

$urls = [
    'https://www.google.com',
    'https://www.tech.ac.jp',
];
// var_dump($urls);

$idx = random_int(0, 1);
$url = $urls[$idx];
var_dump($url);

//
header("Location: {$url}");
