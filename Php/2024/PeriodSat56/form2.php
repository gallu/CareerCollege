<?php  // form2.php

// var_dump( $_GET );
// var_dump( $_POST );

$txt = $_POST["txt"]   ??   "default" ;

echo "あなたの入力は" , htmlspecialchars($txt) , "ですね";
