<?php
// dice_T.php
require_once('dice_func.php');

//
$i = dice::d6() + dice::d6() + dice::d6();
var_dump($i);
//
$i = dice::d10();
var_dump($i);
