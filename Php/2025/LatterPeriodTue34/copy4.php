<?php  // copy4.php

class Hoge {
	public function __clone() {
		var_dump(spl_object_id($this)); // XXX 来週、object_idに差し替える
		echo __METHOD__ , "<br>\n";
	}
}

$obj = new Hoge();
$obj2 = clone $obj;
var_dump(spl_object_id($obj), spl_object_id($obj2));
