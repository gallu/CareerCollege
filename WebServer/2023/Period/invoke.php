<?php  // invoke.php
// https://dev2.m-fr.net/アカウント名/invoke.php

class Hoge {
    public function __invoke() {
        echo __METHOD__ , "<br>\n";
    }
}

$obj = new Hoge();
var_dump($obj);
$obj();

$fn = function() {
    echo __FUNCTION__ , "<br>\n";
};
var_dump($fn);
$fn();
