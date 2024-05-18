<?php  // exception.php

$arr = [];
try {
    // throw new Exception('test ex');
    $s = $arr['key'] ?? throw new Exception('test ex');
} catch (Exception $e) {
    echo $e->getMessage() , '<br>' ;
}

echo 'fin.';
