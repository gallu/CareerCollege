<?php  // form.php

// var_dump( $_GET );

$txt = $_GET["txt"]   ??   "default" ;
// var_dump($txt);

// XSS
// echo "あなたの入力は" , $txt , "ですね";

echo "あなたの入力は" , htmlspecialchars($txt) , "ですね";

