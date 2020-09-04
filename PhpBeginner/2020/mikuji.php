<?php  // mikuji.php
//   http://dev2.m-fr.net/アカウント名/mikuji.php

require_once(__DIR__ . '/../vendor/autoload.php');

// おみくじを引く関数
function mikuji() {
    // おみくじの束を用意する
    $mikuji_box = [
        '<img width="50" src="https://www.spicomi.net/media/uploads/article/image/1068/card___1.jpg">大吉',
        '吉',
        '中吉',
        '小吉',
        '末吉',
        '凶',
        '大凶',
    ];
    //var_dump( $mikuji_box );

    // おみくじを引く
    $last = count($mikuji_box) - 1;
    $i = random_int(0, $last);
    //var_dump($i);
    $mikuji_string = $mikuji_box[$i];
    //$mikuji_string = $mikuji_box[random_int(0, count($mikuji_box) - 1)];

    return $mikuji_string;
}

// Twigの準備
$loader = new \Twig\Loader\FilesystemLoader( __DIR__ . '/templates' );
$twig = new \Twig\Environment($loader);
//
$context = [];

// おみくじを引く
$context['mikuji_string'] = mikuji();

// 出力する
echo $twig->render('mikuji.twig' , $context);
