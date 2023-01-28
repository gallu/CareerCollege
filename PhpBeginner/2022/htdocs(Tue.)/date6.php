<?php   // date6.php

//
$d_obj = new DateTime();
echo $d_obj->format("Y-m-d H:i:s") , "<br>";

//
$d_obj = new DateTime("yesterday");
echo $d_obj->format("Y-m-d H:i:s") , "<br>";

//
$d_obj = new DateTime("noon");
echo $d_obj->format("Y-m-d H:i:s") , "<br>";

//
$d_obj = new DateTime("first day of June 2022");
echo $d_obj->format("Y-m-d H:i:s") , "<br>";

//
$d_obj = new DateTime("last day of June 2022");
echo $d_obj->format("Y-m-d H:i:s") , "<br>";
