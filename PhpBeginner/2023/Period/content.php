<?php  // content.php

header("Content-type: application/pdf");
echo file_get_contents("/tmp/sample.pdf");
