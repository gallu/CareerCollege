<?php  // if4.php

// 昔は...
if (2 == "2a") {
    echo "2 == 2a is true <br>\n";
} else {
    echo "2 == 2a is false <br>\n";
}
if (2 === "2a") {
    echo "2 === 2a is true <br>\n";
} else {
    echo "2 === 2a is false <br>\n";
}

if (200 == "  200") {
    echo "200 == '  200' is true <br>\n";
} else {
    echo "200 == '  200' is false <br>\n";
}
if (200 === "  200") {
    echo "200 === '  200' is true <br>\n";
} else {
    echo "200 === '  200' is false <br>\n";
}

