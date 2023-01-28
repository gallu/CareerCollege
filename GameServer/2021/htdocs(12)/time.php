<?php   // time.php
//  https://dev2.m-fr.net/アカウント名/time.php

$t = time();
var_dump($t);

$date_string = date('Y年m月d日(D) H:i:s');
var_dump($date_string);

$date_obj = new DateTime();
var_dump( $date_obj->format('Y-m-d H:i:s') );

var_dump( (new DateTime())->format('Y-m-d H:i:s') );
