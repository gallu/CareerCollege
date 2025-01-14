<?php  // write4.php

echo "hoge <br>\n";

//
$fp = fopen("php://output", "w");
fwrite($fp, "foo <br> \n");
