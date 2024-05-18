<?php  // match.php

$s = '2';
switch($s) {
    case 1:
        echo "int 1<br>\n";
        break;
    case 2:
        echo "int 2<br>\n";
        break;
    case 3:
        echo "int 3<br>\n";
        break;
    case '2':
        echo "string 2<br>\n";
        break;
}

$r = match($s) {
    1 => 'int 1',
    2 => 'int 2',
    3 => 'int 3',
    '2' => 'string 2',
};
echo "{$r} <br>\n";
