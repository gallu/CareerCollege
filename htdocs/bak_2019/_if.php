<?php  // if.php

$i = 20;
if ($i >= 20) {
	echo '20以上です';
} else if ($i >= 10) {
	echo '10以上です';
} else {
	echo '一桁です';
}

//
if ( (true || true)&&(false || true) ) {
}

//
if (2 == '2') {
    echo 'true 1';
}
if (2 == '2a') {
    echo 'true 2';
}
//
if (2 === '2') {
    echo 'true 3';
}
if (2 === '2a') {
    echo 'true 4';
}

//
$f = 0.1 + 0.2;
if (0.3 === $f) {
    echo 'true 5';
} else {
    echo 'false 5';
}
echo "\n";
printf("%f\n", $f);
printf("%f\n", 0.3);
echo "\n";
printf("%.28f\n", $f);
printf("%.28f\n", 0.3);






