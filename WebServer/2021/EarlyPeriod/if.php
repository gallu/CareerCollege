<?php   // if.php
declare(strict_types=1);

//
if (2 == '2') {
    echo 'true<br>';
} else {
    echo 'false<br>';
}
if (2 === '2') {
    echo 'true<br>';
} else {
    echo 'false<br>';
}

//
if (false == null) {
    echo 'null is false<br>';
}
if (false == []) {
    echo '[] is false<br>';
}
if (false == "") {
    echo '"" is false<br>';
}
if (false == "0") {
    echo '"0" is false<br>';
}
