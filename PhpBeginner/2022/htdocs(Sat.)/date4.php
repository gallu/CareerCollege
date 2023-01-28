<?php   // date4.php

//
$d_obj = new DateTime('2020/01/31');
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
//
$d_obj->add(new DateInterval("P1M"));
$d_string = $d_obj->format("Y-m-d H:i:s");
echo "{$d_string} <br>";
