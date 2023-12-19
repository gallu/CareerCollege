<?php  // location.php

ob_start();
echo "location";
header("Location: https://www.google.com");

ob_end_flush();
