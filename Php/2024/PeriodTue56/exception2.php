<?php  // exception2.php

class R1Exception extends RuntimeException {
}
class R2Exception extends RuntimeException {
}
class R3Exception extends RuntimeException {
}

try {
    throw new R1Exception('');
} catch (R3Exception $e) {
    echo 'get R3!!';
} catch (R1Exception | R2Exception ) {
    echo 'get R1 or R2!!';
}

/*
try {
    throw new R1Exception('');
} catch (R3Exception $e) {
    echo 'get R3!!';
} catch (R2Exception $e) {
    echo 'get R2!!';
} catch (R1Exception $e) {
    echo 'get R1!!';
}
*/

