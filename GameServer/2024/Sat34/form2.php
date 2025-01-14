<?php  // form2.php
// https://dev2.m-fr.net/アカウント名/form2.php?hoge=12345

$hoge = $_GET["hoge"] ?? "";

echo "入力したのは", htmlspecialchars($hoge), "ですね。";

