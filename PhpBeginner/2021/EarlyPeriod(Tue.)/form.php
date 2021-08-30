<?php   // form.php

// XSS対策用関数
function h($s) {
    return htmlspecialchars($s, ENT_QUOTES);
}

//
//var_dump( $_GET );
//var_dump( $_POST );

//
$input_1 = $_POST['input_1'] ?? '';
$input_2 = $_POST['input_2'] ?? '';

// XXXXXXXXX これはダメ！！ 絶対！！
//echo "{$input_1} は {$input_2} です<br>\n";
// こっちで書く！！
echo h($input_1), " は " , h($input_2), "です<br>\n";
