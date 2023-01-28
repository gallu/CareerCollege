<?php
//box_2.php

// box_listを読み込む
// XXX 本来ならDB
session_start();
$box_list = unserialize($_SESSION['box_list']);
if (empty($box_list)) {
    echo 'box list、ないよ？';
    exit;
}

// box_listから１枚取り出す
var_dump( count($box_list) );
$card = array_pop($box_list);
var_dump( count($box_list) );
var_dump($card);

// box_listを保存する
$_SESSION['box_list'] = serialize($box_list);

