<?php  // form_post.php

//var_dump($_POST);
$s = $_POST['test'];
$s2 = $_POST['test2'];
//
$s = filter_input(INPUT_POST, 'test'); // XXX

//
$s_e = htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
//
echo "“ü—Í‚P‚Í {$s_e} ‚Å‚·";
