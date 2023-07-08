<?php  // validation.php

var_dump( checkdate(6, 27, 2023) );
var_dump( checkdate(6, 32, 2023) );
var_dump( checkdate(13, 27, 2023) );
var_dump( checkdate(1, 1, 0000) );

$s = "27/Jun/2023:18:16:57 +0900";
$t = strtotime($s);
var_dump($t);
$s = "32/Jun/2023:18:16:57 +0900";
$t = strtotime($s);
var_dump($t);

//
$s = "あいう";
var_dump( strlen($s) ); // VARBINARY
var_dump( mb_strlen($s) ); // VARCHAR
var_dump( mb_strwidth($s) ); // デザイン起因

// 数字
var_dump( is_numeric(10) );
var_dump( is_numeric("123") );
var_dump( is_numeric("abc") );
var_dump( is_numeric("0123") );
var_dump( is_numeric("0x0a") );
var_dump( is_numeric("2e3") );
var_dump(filter_var(123, FILTER_VALIDATE_INT));
var_dump(filter_var("123", FILTER_VALIDATE_INT));
var_dump(filter_var("2e3", FILTER_VALIDATE_INT));
var_dump(filter_var("abc", FILTER_VALIDATE_INT));
echo "<br>";

// 住所(と半角全角)
$base = "Ａｂｃあイウ１２３"; // 全部全角で
$s = mb_convert_kana($base, "acHV");
var_dump($base, $s);
echo "<br>";

// 郵便番号
// - 実在するか？: DB使え
// - フォーマットがvalidか？
$pattern = "/\A[0-9]{3}[\- ]{0,1}[0-9]{4}\z/"; // 「どんなフォーマット」をチェックしたいか？
$subject = "123-4567"; // チェックする文字列
$r = preg_match($pattern, $subject, $matches);
var_dump($r, $matches);
echo "<br>";

// email
// - 実在するか？: 運用でどうにかする
// - フォーマットがvalidか？

// ダメなケース
function v(string $text): bool {
    if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $text)) {
        return true;
    } else {
        return false;
    }
}
//
$email = "test@test.com";
$is_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $is_valid, v($email));

$email = "testtest.com";
$is_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $is_valid, v($email));

// 拡張メールアドレス
$email = "test+abc@test.com";
$is_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $is_valid, v($email));

$email = "test-abc@test.com";
$is_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $is_valid, v($email));

//
$email = "test@[1.2.3.4]";
$is_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $is_valid, v($email));

//
$email = "test.@test.com";
$is_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $is_valid, v($email));

$email = "te..st@test.com";
$is_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $is_valid, v($email));

$email = '"te..st"@test.com';
$is_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $is_valid, v($email));

$email = '"te@st"@test.com';
$is_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $is_valid, v($email));
