<?php  // uuid.php

//
$uuid = trim(`uuidgen -r`); // «—ˆ”pŽ~‚³‚ê‚é‚©‚àcc
$uuid = trim(exec('uuidgen -r'));
var_dump($uuid);
