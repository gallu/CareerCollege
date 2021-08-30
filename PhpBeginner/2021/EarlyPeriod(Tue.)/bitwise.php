<?php   // bitwise.php
//
var_dump( FILE_APPEND, LOCK_EX );
var_dump( FILE_APPEND | LOCK_EX );

/*
// 追加書き込みか？
if (0 !== (引数 & FILE_APPEND)) {
    // XXXX
}
*/

/*
var_dump( 1 | 2 ); // 0001  |  0010
var_dump( 1 | 3 ); // 0001  |  0011
var_dump( 1 | 4 ); // 0001  |  0100
//
var_dump( 1 & 2 ); // 0001  &  0010
var_dump( 1 & 3 ); // 0001  &  0011
var_dump( 1 & 4 ); // 0001  &  0100
*/
