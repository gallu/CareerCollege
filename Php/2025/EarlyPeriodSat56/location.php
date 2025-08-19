<?php  // location.php
ob_start(); // 右記よけ: Warning: Cannot modify header information - headers already sent by

$uri = 'https://www.tech.ac.jp/';

echo "t";
header("Location: {$uri}");

ob_end_flush();
