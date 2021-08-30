<?php   // form.php

//echo 'form';
//var_dump( $_GET );
//var_dump( $_POST );

// XSS対策用関数
function h($s) {
    return htmlspecialchars($s, ENT_QUOTES);
}

// 入力を受け取る
$input_1 = $_POST['input_1']  ??  '';
$input_2 = $_POST['input_2']  ??  '';

// XXXXXXXXX
// XSS セキュリティホール ばりばりあります！！！
//echo "{$input_1} は {$input_2} です！！<br>\n";

// XSSが防げるのはこっち
echo h($input_1) , " は " , h($input_2) , " です！！<br>\n";


