<?php  // loop2_web_clear.php

ob_start();
session_start();

unset($_SESSION["pc"]);
unset($_SESSION["enemy"]);
unset($_SESSION["logs"]);

//echo "削除完了";
header("Location: ./loop2_web.php");

