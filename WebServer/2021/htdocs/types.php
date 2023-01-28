<?php   // types.php
declare(strict_types=1);

// 変数の型 いろいろ
var_dump( -1 );
var_dump( 0xff );
var_dump( 3.141592 );
var_dump( 'string' );
var_dump( true );
//
var_dump( [1,2] );
var_dump( ['key' => 'val'] );
//
var_dump( new stdClass() );
//
var_dump( null );
//
var_dump( fopen(__FILE__, 'r') );
//
var_dump( function() {} );
