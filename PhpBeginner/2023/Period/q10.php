<?php  // q10.php
ob_start();

function randomRedirect() {
    // random_int(1,3) で、1～3の乱数を作成します
    $i = random_int(1,3);
// var_dump($i);
    if (1 === $i) {
        // 乱数が 1 なら、 Cookieに「名前:locate, 値:google」を設定し、 https://www.google.com にリダイレクト
        setcookie("locate", "google");
        header("Location: https://www.google.com");
    } elseif (2 === $i) {
        // 乱数が 2 なら、 Cookieに「名前:locate, 値:school」を設定し、 https://www.tech.ac.jp にリダイレクト
        setcookie("locate", "school");
        header("Location: https://www.tech.ac.jp");
    } elseif (3 === $i) {
        // 乱数が 3 なら、 Cookieに「名前:locate, 値:net」を設定し、 https://aws.amazon.com/jp/ にリダイレクト
        setcookie("locate", "net");
        header("Location: https://aws.amazon.com/jp/");
    }
}

randomRedirect();
