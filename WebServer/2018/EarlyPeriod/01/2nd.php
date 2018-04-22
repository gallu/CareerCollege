<?php
// 2nd.php

// 反復
for($i = 0; $i < 10; ++$i) {
    echo $i, "<br>\n" ;
}

// 分岐
$i = mt_rand(10, 30);
if ($i < 20) {
    echo $i, "歳は、未成年です<br>\n";
} else {
    echo $i, "歳は、成人です<br>\n";
}


