<?php  // exception3.php


set_exception_handler(function(Throwable $ex) {
    echo 'get???' , $ex->getMessage();
});

throw new RuntimeException('un catch');

