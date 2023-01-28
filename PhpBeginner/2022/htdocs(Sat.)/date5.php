<?php   // date5.php

//
$d_start = new DateTime("first day of Jul 2022");
echo $d_start->format("Y-m-d H:i:s") , "<br>";

//
$d_end = new DateTime("last day of July 2022 noon");
echo $d_end->format("Y-m-d H:i:s") , "<br>";
