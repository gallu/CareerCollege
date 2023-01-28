<?php   // op2.php

echo "true || true:";
var_dump(true || true);

echo "<br>false || true:";
var_dump(false || true);

echo "<br>false || false:";
var_dump(false || false);

echo "<br>true && true:";
var_dump(true && true);

echo "<br>false && true:";
var_dump(false && true);

echo "<br>false && false:";
var_dump(false && false);

// XXX これはダメな例
echo "<br>";
var_dump(7 || 11);
var_dump(7 && 11);


