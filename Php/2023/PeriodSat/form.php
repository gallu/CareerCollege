<?php  // form.php

// var_dump($_GET);
// var_dump($_POST);
$id = $_POST["id"];
$pw = $_POST["pw"];

echo "あなたのIDは";
echo htmlspecialchars($id, ENT_QUOTES);
echo "です";
