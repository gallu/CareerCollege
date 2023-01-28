<?php
// ArrayObject.php
$obj = new ArrayObject(); //$obj = [];
$obj[] = 10;
$obj[] = 20;
$obj['test'] = 30;
foreach($obj as $k => $v) {
     echo "{$k} -> {$v}<br>\n";
}
var_dump($obj);
