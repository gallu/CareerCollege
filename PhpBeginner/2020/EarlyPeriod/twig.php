<?php  // twig.php

require_once(__DIR__ . '/../vendor/autoload.php');

/*
$loader = new \Twig\Loader\ArrayLoader([
    'index1' => 'こんにちは！！ {{ name }}!',
    'index2' => '{{ name }}! こんばんは！！',
]);
*/
$loader = new \Twig\Loader\FilesystemLoader( __DIR__ . '/templates' );
$twig = new \Twig\Environment($loader);

echo $twig->render('index1.twig' , ['name' => 'おいちゃん']);
