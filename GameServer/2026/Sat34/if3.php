<?php  // if3.php

var_dump(true);
echo "<br>\n";
var_dump(false);
echo "<br>\n";

if (true) {
    echo "in true <br>\n";
}

if (1) {
    echo "in 1 <br>\n";
}

var_dump((bool)1);
echo "<br>\n";
var_dump((bool)0);
echo "<br>\n";
var_dump((bool)-1);
echo "<br>\n";

var_dump((bool)"abc");
echo "<br>\n";
var_dump((bool)"");
echo "<br>\n";
var_dump((bool)"0");
echo "<br>\n";
var_dump((bool)"00");
echo "<br>\n";

