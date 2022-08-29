<?php   // form.php

// XSS対策
function h($s) {
    return htmlspecialchars($s, ENT_QUOTES);
}

//var_dump( $_GET );
//var_dump( $_POST );

//
$name = $_POST["name"]  ??  "" ;
//var_dump($name);

?><!doctype html>

こんにちは
<?php
//echo $name; // ダメ！ 絶対！！
//echo htmlspecialchars($name, ENT_QUOTES);
echo h($name);
?>
さん
