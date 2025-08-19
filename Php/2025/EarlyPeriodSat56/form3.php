<?php  // form3.php

// var_dump($_POST);

$like = $_POST["like"] ?? [];

if ($like === []) {
    echo "からっぽ";
} else {
    foreach($like as $v) {
        echo htmlspecialchars("{$v}, ");
    }
}

