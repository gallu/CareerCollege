<?php  // break.php

for($i = 0; $i < 10; ++$i) {
    if ($i === 5) {
        break;
    }
    echo "{$i},";
}
echo "fin <br> \n";

/*
for(;;) {
    if (...) {
        break;
    }
}

while(true) {
    if (...) {
        break;
    }
}
*/
