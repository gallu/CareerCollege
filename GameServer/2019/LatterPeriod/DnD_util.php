<?php // DnD_util.php

session_start();

require_once('./dice.php');

function correction($i) {
    switch($i) {
        case 3:
            $ret = -3;
            break;
		case 4:
        case 5:
            $ret = -2;
            break;
        case 6:
        case 7:
        case 8:
            $ret = -1;
            break;
        case 13:
        case 14:
        case 15:
            $ret = 1;
            break;
        case 16:
        case 17:
            $ret = 2;
            break;
        case 18:
            $ret = 3;
            break;
        default: // 9～１２
            $ret = 0;
            break;
    }
    return $ret;
}


