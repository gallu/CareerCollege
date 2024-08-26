<?php  // cookie2.php

// Cookieの削除
setcookie("tmp", "", time() - 60);
var_dump($_COOKIE);

