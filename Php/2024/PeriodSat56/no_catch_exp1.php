<?php  // no_catch_exp1.php

set_exception_handler(function (Throwable $e) {
    echo $e->getMessage() , "<br>\n";
});

throw new RuntimeException("てすと");
echo "つぎ <br>\n";



