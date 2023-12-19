<?php  // questionnaire.php
require_once  __DIR__ . "/questionnaire_config.php";
// require  __DIR__ . "/questionnaire_config.php";
// include_once  __DIR__ . "/questionnaire_config.ph";

//
ob_start();

// 回答できるか？
function isAnswer() {
    $v = $_COOKIE["questionnaire"] ?? "";
    // 初回ならOK
    if ("" === $v) {
        return true;
    }
    //　回答年月日と現在年月日が異なるならOK
    if ($v !== makeLockString()) {
        return true;
    }
    //　上述以外ならNG
    return false;
}
// 「回答したよ！」をマーキング
function answerFin() {
    // リセットしたくないタイミングを設定
    $v = makeLockString();
    setcookie("questionnaire", $v, ["expires" => time() + 86400]);
}
// ロック用文字列の作成
function makeLockString() {
    return date("YmdHis");
}

/*
// 回答できるか？
function isAnswer() {
    // CookieがあったらNG
    if (true === isset($_COOKIE["questionnaire"])) {
        return false;
    }
    return true;
}
// 「回答したよ！」をマーキング
function answerFin() {
    //　一定の寿命のCookieを設置
    setcookie("questionnaire", "1", ["expires" => time() + 60]);
}
*/

// アンケートの回答を取得
function getAnswers() {
    $ret = [];
    // 好きなもの
    $ret["like"] = $_POST["like"] ?? '';
    // 年代
    $ret["age"] = $_POST["age"] ?? '';

    return $ret;
}

//　validate
function validate($ans) {
    //
    if ("" === $ans["like"]) {
        return false;
    }
    if ("" === $ans["age"]) {
        return false;
    }
    return true;
}

//　CSVファイルに保存
function saveFile($ans) {
    // questionnaire.csv
    $fn = CSV_FILENAME;
    // var_dump($fn);
    // var_dump(is_file($fn));
    // var_dump(is_writable($fn));
// exit;

    //
    $ts = date(DATE_ATOM);
    // $ans[] = $ts;
    $ans = [$ts, ...$ans];

    //
    $fp = fopen($fn, "a");
    // ファイルへの書き込み
    $r = fputcsv($fp, $ans);
    var_dump($r);
    //
    fclose($fp);
}

// 1日1回回答
$r = isAnswer();
if (false === $r) {
    echo "すでに回答しています";
    exit;
}

// アンケートの回答を取得
$ans = getAnswers();
var_dump($ans);

//　validateする
$r = validate($ans);
// var_dump($r);
if (false === $r) {
    echo "未入力の所があるので、backで戻って入力してください。";
    exit;
}

//　CSVファイルに保存
saveFile($ans);

// 「回答済」を記録する
answerFin();

//　「回答ありがとう」ページを出力
header("Location: ./questionnaire_fin.html");
