<?php
// dice_func.php
class dice {
	// D6
	static public function d6() {
	    return static::dn(6);
	}
	// D10
	static public function d10() {
	    return static::dn(10);
	}
	// D[n]
	static public function dn($n) {
	    return mt_rand(1, $n);
	}
}
