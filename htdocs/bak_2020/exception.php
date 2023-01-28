<?php   // exception.php

function hoge() {
    echo  __FUNCTION__ , "\n";
    throw  new  \Exception('hoge error!!!');
    echo "fin\n";
}

//
try {
    hoge();
} catch (\Throwable $e) {
    echo $e->getMessage();
    exit;
}
echo 'main fin';
