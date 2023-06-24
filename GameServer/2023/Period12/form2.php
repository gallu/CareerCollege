<?php  // form2.php

// var_dump($_POST);

$job = $_POST["job"]  ??  "無職";
$have = $_POST["have"]  ??  [];

echo "職業は";
echo htmlspecialchars($job);
echo "ですね。<br>";

echo "所持品は...<br>";
foreach($have as $h) {
    echo htmlspecialchars($h), "<br>";
}
