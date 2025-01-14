<?php  // hash3.php

function pTest($password_1, $password_2): bool {
    //
    $hpass = password_hash($password_1, PASSWORD_DEFAULT);
    //
    return password_verify($password_2, $hpass);
}    

//
$password = "password";
$r = pTest($password, $password);
var_dump($r);

$r = pTest($password, $password . "a");
var_dump($r);

echo "<br>\n";

//
$password = str_repeat("p", 72);
$r = pTest($password, $password);
var_dump($r);

$r = pTest($password, $password . "a");
var_dump($r);




