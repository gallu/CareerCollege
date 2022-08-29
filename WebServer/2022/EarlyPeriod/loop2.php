<?php   // loop2.php
declare(strict_types=1);

// 「代入式の結果」は代入された値が還る
var_dump( 123 );
//
$i = 456;
var_dump( $i );
//
var_dump( $j = 789 );
var_dump( $j );

//
echo "<br>\n";
while(0 !== ($i = random_int(0, 10))) {
    echo "{$i}.";
}



