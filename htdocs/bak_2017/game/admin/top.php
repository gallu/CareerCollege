<?php
// top.php
session_start();
if (false === isset($_SESSION['auth'])) {
    header('Location: ./index.html');
}

?>
<h1>ログイン後TopPage</h1>

<a href="./logout.php">ログアウト</a>
