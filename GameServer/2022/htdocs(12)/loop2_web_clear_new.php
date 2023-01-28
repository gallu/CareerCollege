<?php  // loop2_web_clear_new.php


ob_start();
session_start();

unset($_SESSION["battle_data"]);

//echo "削除完了";
header("Location: ./loop2_web_new.php");