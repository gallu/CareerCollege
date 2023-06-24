<?php  // form3.php

$type = (string) ($_POST["type"] ?? "");

echo "type is ";
echo htmlspecialchars($type);
echo "<br> \n";

$ck = (array) ($_POST["ck"] ?? []);
echo "checkbox is ... <br> \n";
foreach($ck as $v) {
    echo htmlspecialchars($v);
    echo "<br> \n";
}

