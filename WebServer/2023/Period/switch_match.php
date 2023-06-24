<?php  // switch_match.php

$val = '2';

if ($val === 1) {
    echo "値は１です";
} elseif ($val === 2) {
    echo "値は2です";
} elseif ($val === 3) {
    echo "値は3です";
} else {
    echo "値はそれ以外です";
}

switch($val) {
    case 1:
        echo "値は１です";
        break;

    case 2:
        echo "値は2です";
        break;

    case 3:
        echo "値は3です";
        break;

    default:
        echo "値はそれ以外です";
        break;
}

//
$out = match($val) {
    1,2 => '値は1か2です',
    3 => '値は3です',
    default => '値はそれ以外です',
};
echo $out;


