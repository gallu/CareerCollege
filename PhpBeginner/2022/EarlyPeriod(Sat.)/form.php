<?php   // form.php

require_once("common.php");

//var_dump( $_GET );
//var_dump( $_POST );

$name = $_POST['name']  ??  "";
//var_dump($name);
?><!doctype html>
あなたのお名前は
<?php
//echo $name; // 絶対になにがあってもダメ！
echo h($name);
?>
さんですね。


