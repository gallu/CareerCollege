<?php   // form.php

require_once(__DIR__ . "/common.php");

//var_dump( $_GET );
//var_dump( $_POST );
$name = $_POST['name'] ?? "";
//var_dump($name);

?>
あなたのお名前は 
<?php
/* echo $name; // これは絶対にダメ！！！ */
echo h($name);
?>
 ですね 