<?php  // pre_box_2.php

session_start();

$_SESSION['num'] = @$_SESSION['num'] + mt_rand(0, 99);
if (0 === ($_SESSION['num'] % 10)) {
	$_SESSION['num'] = 0;
}
//
if (@$_SESSION['max'] <= $_SESSION['num']) {
	$_SESSION['max'] = $_SESSION['num'];
}
//var_dump($_SESSION['num']);
echo "Max: {$_SESSION['max']}<br>\n";
echo "スコア: {$_SESSION['num']}<br>\n";

