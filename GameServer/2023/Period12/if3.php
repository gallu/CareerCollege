<?php  // if3.php

if (true) {
    echo "into true level 1 <br>\n";
} elseif (true) {
    echo "into true level 2 <br>\n";
} else {
    echo "NOT into true <br>\n";
}

if (false) {
    echo "into true2 level 1 <br>\n";
} elseif (true) {
    echo "into true2 level 2 <br>\n";
} else {
    echo "NOT into true2 <br>\n";
}

if (false) {
    echo "into true3 level 1 <br>\n";
} elseif (false) {
    echo "into true3 level 2 <br>\n";
} elseif (true) {
    echo "into true3 level 3 <br>\n";
} else {
    echo "NOT into true3 <br>\n";
}
