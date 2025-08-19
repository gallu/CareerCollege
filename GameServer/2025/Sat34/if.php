<?php  // if.php

if (true) {
    echo "into if 1 <br>";
}
if (false) {
    echo "into if 2 <br>";
}

if (true) {
    echo "into if 3 <br>";
} else {
    echo "into if 3 else <br>";
}

if (false) {
    echo "into if 4 <br>";
} elseif (false) {
    echo "into if 4 elseif <br>";
} else if (false) {
    echo "into if 4 else if <br>";
} else {
    echo "into if 4 else <br>";
}
