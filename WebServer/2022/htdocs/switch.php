<?php   // switch.php
//  https://dev2.m-fr.net/アカウント名/switch.php

$i = random_int(1, 3);
$i = "1";
var_dump($i);

switch($i) {
    case 1:
        echo "1\n";
        //break; // fall through
        
    case 2:
        echo "2nd\n";
        break;

    case "1":
        echo "string 1\n";
        break;

    default:
        echo "not 1, not 2\n";
        break;
}


