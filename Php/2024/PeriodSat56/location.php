<?php  // location.php
ob_start();

$uri = 'https://www.tech.ac.jp/';

echo "1";

header("Location: {$uri}");

ob_end_flush();
