<?php  // interface3.php

interface HogeInterface {
	// Fatal error: Interface function HogeInterface::ttt() cannot contain body in
	// public function ttt() {
		// echo __METHOD__ , "<br>";
	// }

	// Fatal error: Access type for interface method HogeInterface::ttt() must be public 
	// protected function ttt();

	// Fatal error: Interfaces may only include hooked properties in
	// 8.1: Fatal error: Interfaces may not include properties in 
	// public int $num;
}
