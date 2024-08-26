<?php  // location.php

ob_start();

echo "debug";

header(header: 'Location: https://www.tech.ac.jp/', response_code: 301);

ob_end_flush();
// ob_end_clean();
// ob_get_clean();
