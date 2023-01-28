<?php   // switch.php
declare(strict_types=1);

$i = random_int(1, 4);
//
switch ($i) {
    case 1:
        echo '1';
        break;
    case 2:
        echo 'に';
        break;
    case 3:
        echo 'three';
        // XXX
    default:
        echo 'よん？';
        break;
}

//
echo "<br>\n";
$s = '2';
switch ($s) {
    case 2:
        echo '2';
        break;
    case '2':
        echo 'string 2';
        break;
}

//
echo "<br>\n";
$ret = match($s) {
    2 => 'input 2',
    '2' => 'input string 2',
    default => '???'
};
echo $ret;






