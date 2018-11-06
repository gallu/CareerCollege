<?php  // top.php
//
session_start();
require_once('./Authorization.php');

var_dump( Authorization::isAuth() );
