<?php  // cast.php
// https://dev2.m-fr.net/アカウント名/cast.php

$val_s = "3";
var_dump($val_s);

$val_i = 3;
var_dump($val_i);

$cast_to_i = (int)$val_s;
var_dump($cast_to_i);

$cast_to_i_2 = intval($val_s);
var_dump($cast_to_i_2);

$val_s_2 = "4z5";
$cast_to_i_3 = (int)$val_s_2;
var_dump($cast_to_i_3);

$val_s_3 = "z6";
$cast_to_i_4 = (int)$val_s_3;
var_dump($cast_to_i_4);
