<?php  // harr2.php

// $harr = array(); // 古い書き方
$harr = [];
print_r($harr);

$harr["1st"] = 111;
$harr["2nd"] = "222";
$harr["3rd"] = "3d3d";
print_r($harr);
echo "<br>";

$count = count($harr);
echo "count is {$count} <br>";

foreach ($harr as $k => $v) {
    echo "{$k}: {$v} <br>";
}

