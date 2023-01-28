<?php   // cal.php
// https://dev2.m-fr.net/アカウント名/cal.php

// XXX rand(), mt_rand() よりは random_int()
$i = random_int(1, 100);
$j = random_int(1, 100);
//
$k = $i + $j;
echo "{$i} + {$j} = {$k} <br>\n";
//
$k = $i - $j;
echo "{$i} - {$j} = {$k} <br>\n";
//
$k = $i * $j;
echo "{$i} * {$j} = {$k} <br>\n";
//
$k = $i / $j;
echo "{$i} / {$j} = {$k} <br>\n";
//
$k = $i % $j;
echo "{$i} % {$j} = {$k} <br>\n";





