<?php // static2.php

class Hoge {
	public static int $num;
}

//
Hoge::$num = 123;
var_dump( Hoge::$num );

