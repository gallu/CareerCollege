<?php  // if3.php

if (true) {
	echo "into true level 1 <br>\n";
} elseif (true) {
	echo "into true level 2 <br>\n";
} elseif (true) {
	echo "into true level 3 <br>\n";
} else {
	echo "NOT into true<br>\n";
}

if (false) {
	echo "into 2 true level 1 <br>\n";
} elseif (true) {
	echo "into 2 true level 2 <br>\n";
} elseif (true) {
	echo "into 2 true level 3 <br>\n";
} else {
	echo "NOT into 2 true<br>\n";
}

