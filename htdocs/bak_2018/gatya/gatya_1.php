<?php  // gatya_1.php

require_once('./Card.php');

$card_id = mt_rand(1, 17);
//var_dump($card_id);

//
$card = new Card($card_id);
//var_dump($card); exit;

//
echo 'カード名: ', $card->card_name, '<br>';
echo "<img src='{$card->image_uri}' width=200>";
