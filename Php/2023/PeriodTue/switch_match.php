<?php  // switch_match.php

$num = "2";

if ($num === 1) {
    echo "値は1です<br>\n";
} elseif ($num === 2) {
    echo "値は2です<br>\n";
} elseif ($num === 3) {
    echo "値は3です<br>\n";
} else {
    echo "値はその他です<br>\n";
}

switch($num) {
    case 1:
        echo "値は1です<br>\n";
        break;

    case 2:
        echo "値は2です<br>\n";
        break;

    case 3:
        echo "値は3です<br>\n";
        break;

    default:
        echo "値はその他です<br>\n";
        break;
}

$out = match($num) {
    1 => "値は1です<br>\n",
    2 => "値は2です<br>\n",
    3 => "値は3です<br>\n",
    default => "値はその他です<br>\n",
};
echo $out;


