<?php  // switch.php

$v = '2a';

switch($v) {
    case true:
        echo "boolean<br>\n";
        break;
        
    case 2:
        echo "numeric<br>\n";
        break;
        
    case '2a':
        echo "string<br>\n";
        break;
        
    default:
        echo "other<br>\n";
        break;
}
switch($v) {
    case '2':
        echo "numeric<br>\n";
        break;
        
    case '2a':
        echo "string<br>\n";
        break;
        
    default:
        echo "other<br>\n";
        break;
}
