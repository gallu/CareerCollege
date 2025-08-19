<?php  // csv_write1.php

$fp = fopen("php://output", "w");
// var_dump($fp);

$r = fwrite($fp, "かきこみ");
// var_dump($r);

fclose($fp);
