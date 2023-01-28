<?php   // loop3_web_clear.php

ob_start();
session_start();

unset($_SESSION["battle_data"]);

//echo "削除完了";
header("Location: ./loop3_web.php");