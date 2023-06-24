<?php  // form.php

// var_dump($_POST);
$ttt = $_POST["ttt"];
echo htmlspecialchars($ttt, ENT_QUOTES);
