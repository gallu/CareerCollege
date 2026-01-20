<?php  // get.php

$num = intval($_GET["num"] ?? "0");
$num ++;
var_dump($num);

$num2 = intval($_GET["num2"] ?? "0");
var_dump($num2);

?>
<a href="./get.php?num=<?php echo $num; ?>&num2=1">次へ</a><br>
