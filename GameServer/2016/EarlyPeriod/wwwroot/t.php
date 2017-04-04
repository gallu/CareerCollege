<?php
//
$salt = 'xxxxxxxxxxxxxxxxxxx';

//
$param = 'get_card_id=10';
$hash = sha1($salt . $param);
$param .= '&h=' . $hash;
var_dump($param);
