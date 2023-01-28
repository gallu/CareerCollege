<?php  // make_user_id.php
// http://dev2.m-fr.net/アカウント名/gacha/make_user_id.php

$id = random_bytes(32);
//
var_dump( $id );
var_dump( bin2hex($id) );
var_dump( base64_encode($id) );

