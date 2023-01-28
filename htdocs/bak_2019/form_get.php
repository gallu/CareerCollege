<?php  // form_get.php

//var_dump($_GET);
$s = $_GET['test'];
$s2 = $_GET['test2'];
//
$s = filter_input(INPUT_GET, 'test'); // XXX

//
$s_e = htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
//
echo "入力１は {$s_e} です";


