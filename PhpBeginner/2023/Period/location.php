<?php  // location.php

ob_start();

echo "a";
header("Location: https://www.google.com");

ob_end_flush();
