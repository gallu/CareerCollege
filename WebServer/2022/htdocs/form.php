<?php   // form.php

//var_dump( $_GET );
//var_dump( $_POST );

// XSS対策
function h(string $s) : $s {
    return htmlspecialchars($s, ENT_QUOTES);
}

$name = strval($_POST['name'] ?? "名無し");
//var_dump($name);

?><!doctype html>
こんにちは
<?php
// echo $name; // XSSがあるからダメ！絶対！
echo h($name);
?>
さん！
