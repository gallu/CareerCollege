<?php

$uri = 'https://pbs.twimg.com/media/DNvF2ceUQAE5650.jpg';

//echo parse_url($uri, PHP_URL_PATH), "\n";
//var_dump(parse_url($uri));
$fn = parse_url($uri, PHP_URL_PATH);
$obj = new SplFileInfo($fn);
//var_dump($obj);
var_dump($obj->getExtension());
