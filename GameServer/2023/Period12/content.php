<?php  // content.php

header("Content-type: image/png");
echo file_get_contents("/tmp/test.png");
