<?php  // logout.php
//
session_start();
require_once('./Authorization.php');
//
Authorization::logout();
header('Location: ./index.html');

