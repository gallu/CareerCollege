<?php  // file.php

echo __FILE__ , "<br>\n";
echo __DIR__ , "<br>\n";

$r = file_exists(__FILE__);
var_dump("file_exists", $r);

$r = file_exists("dummy");
var_dump("file_exists", $r);

$r = is_readable(__FILE__);
var_dump("is_readable", $r);

$r = is_writable(__FILE__);
var_dump("is_writable", $r);
