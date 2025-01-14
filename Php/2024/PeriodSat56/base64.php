<?php  // base64.php

$bs = base64_encode("abc123😁");
var_dump($bs);

$s = base64_decode($bs);
var_dump($s);
