<?php  // questionnaire_admin.php
require_once  __DIR__ . "/questionnaire_config.php";

// ログイン用の入力情報のvalidate
function validate($id, $pw) {
    // IDが空ならinvalid
    if ("" === $id) {
        return false;
    }
    // passwordが空ならinvalid
    if ("" === $pw) {
        return false;
    }
    // 上述のいずれでもなければ valid
    return true;
}

//
function login($id, $pw) {
    $collect_id = "admin";
    $collect_pw = '$2y$10$f/GycxZrUOrvC2I553i3.eaxDyfThvIh7w4IUL2I.YzupU6Cmho2G';
    // IDが違ってたらログインできない
    if ($id !== $collect_id) {
        return false;
    }
    // passwordが違ってたらログインできない
    if (false === password_verify($pw, $collect_pw)) {
        return false;
    }
    // どっちも合ってるなら、ログインできる
    return true;
}

function getQuestionnaireData() {
    // ファイル開けて
    $fp = fopen(CSV_FILENAME, "r");
    
    // csv取り出して
    $data = [];
    while(false !== ($d = fgetcsv($fp))) {
        $data[] = $d;
    }

    // ファイル閉じて
    fclose($fp);

    //　データをreturn
    return $data;
}

// var_dump($_POST);
$id = (string) ($_POST["id"] ?? "");
$pw = (string) ($_POST["pw"] ?? "");
// var_dump($id, $pw);

// validate
$r = validate($id, $pw);
if (false === $r) {
    echo "入力データがおかしいよ？";
    exit;
}

// ログイン
$r = login($id, $pw);
if (false === $r) {
    echo "ログインできませんでした　orz";
    exit;
}

//　アンケートデータの取得
$data = getQuestionnaireData();
// var_dump($data);

// データをいろいろと集計する
$datetime = [];
$type = [];
$age = [];
foreach ($data as $datum) {
    // var_dump($datum);
    // var_dump($datum[0]);
    // アンケート日付
    $t = strtotime($datum[0]);
    $d = date("Y-m-d", $t);
    // $d = date("Y-m-d", strtotime($datum[0]));
    $datetime[$d] ??= 0;
    $datetime[$d] += 1;

    // ペット種類
    $type[$datum[1]] ??= 0; // $type[$datum[1]] = $type[$datum[1]] ?? 0;
    $type[$datum[1]] += 1;
    //　年代
    $age[$datum[2]] ??= 0;
    $age[$datum[2]] += 1;
}
// srot
ksort($datetime);
ksort($type);
ksort($age);
//
var_dump($datetime);
var_dump($type);
var_dump($age);
