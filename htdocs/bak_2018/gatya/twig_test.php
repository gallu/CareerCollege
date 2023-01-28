<?php // twig_test.php

// php composer.phar require twig/twig

require_once('vendor/autoload.php');

$temps = __DIR__ . '/templates';
$twig_obj = new \Twig\Environment(new \Twig\Loader\FilesystemLoader($temps));

//
$data = [];
$data['val'] = 'ssssssssssssssss';
//
$template_file = 'test.html.twig';
//
$s = $twig_obj->render($template_file, $data);
echo $s;
