<?php
// header.php
ob_start();
//
sleep(3);
header('Location: http://www.google.com');
//
ob_end_flush();
