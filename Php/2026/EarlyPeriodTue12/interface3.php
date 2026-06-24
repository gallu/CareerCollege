<?php  // interface3.php
declare(strict_types=1);

interface HogeInterface {
    // protected function func(); // Fatal error: Access type for interface method HogeInterface::func() must be public
    // private function func(); // Fatal error: Access type for interface method HogeInterface::func() must be public

    // Fatal error: Interface function HogeInterface::func() cannot contain body 
    // public function func() {
        // var_dump( __METHOD__ );
    // }

    // private int $num; // Fatal error: Property in interface cannot be protected or private in
    // public int $num; // Fatal error: Interfaces may only include hooked properties in
}
