<?php   // exception2.php

try {
    throw new Exception("hoge foo");
} catch (\Throwable $e) {
    echo $e->getMessage();
}
