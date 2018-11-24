<?php  // gatya_2.php

require_once('./Card.php');
require_once('./Gacya.php');

$card_id = Gacya::getCard('nomal');
//var_dump($card_id);

//
$card = new Card($card_id);
//var_dump($card); exit;

//
echo 'カード名: ', $card->card_name, '<br>';
echo "<img src='{$card->image_uri}' width=200>";
echo '<br>', $card->card_text, '<br>';
echo $card->attack , '/' , $card->defense;
