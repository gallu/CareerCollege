<?php   // comp.php
//  http://dev2.m-fr.net/アカウント名/comp.php

var_dump( 1 === 1 );
var_dump( 1 === 2 );
var_dump( 1 == '1' );
var_dump( 1 === '1' );
var_dump( 1 < 2 );
echo "<br>\n";
//
var_dump( (bool)'abc' );
var_dump( (bool)'' );
var_dump( (bool)1 );
var_dump( (bool)0 );
var_dump( (bool)-1 ); // true
var_dump( (bool)[1,2,3] );
var_dump( (bool)[] );
var_dump( (bool)null );
var_dump( (bool)'1' );
var_dump( (bool)'0' ); // XXX false

