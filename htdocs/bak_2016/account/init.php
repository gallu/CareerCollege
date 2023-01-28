<?php
/*
 * init.php
 */
// 出力バッファの開始
ob_start();

// セッションの開始
session_start();

// DBに接続
require_once('db.php');


// ------------------------
// 以下、共通関数。増えたら別ファイルに切り出す

// CSRF tokenを作る
function create_csrf_token() {
  // CSRFトークンを作ってセッションに保存
  $csrf_token = hash('sha512', random_bytes(128));
  // CSRFトークンは5個まで(で後で追加するので、ここでは4個以下に)
  while (5 <= count(@$_SESSION['csrf_token'])) {
    array_shift($_SESSION['csrf_token']);
  }
  // セッションに格納
  $_SESSION['csrf_token'][$csrf_token] = time();

  //
  return $csrf_token;
}

// CSRFチェック
function check_csrf_token() {
  // CSRFチェック
  $post_csrf_token = (string)@$_POST['csrf_token']; // XXX magic number
  if (false === isset($_SESSION['csrf_token'][$post_csrf_token])) {
    return false;
  }
  // 寿命を把握して
  $ttl = $_SESSION['csrf_token'][$post_csrf_token];
  // 先にトークンは削除(使い捨てなので)
  unset($_SESSION['csrf_token'][$post_csrf_token]);

  // 寿命チェック(1分以内)
  if (time() >=  $ttl + 60) {
    echo 'CSRF寿命エラーです';
    exit;
  }
  //
  return true;
}


// アクティブ / 非アクティブを切り替えるための関数
function subject_act($activation_flg, $dbh) {
	// CSRFトークンをチェックする
	if (false === check_csrf_token()) {
	    header('Location: ./subject.php');
	    exit;
	}

	// データを取得
	$subject_id = (string)@$_POST['subject_id'];

	// validate
	if ('' === $subject_id) {
	    header('Location: ./subject.php');
	    exit;
	}

	// データをupdate
	// 「準備された文」を用意する
	$sql = 'UPDATE subjects SET activation_flg = :activation_flg WHERE subject_id = :subject_id;';
	$pre = $dbh->prepare($sql);

	// プレースホルダに値をバインドする
	$pre->bindValue(':activation_flg', $activation_flg);
	$pre->bindValue(':subject_id', $subject_id);

	// SQLを実行する
	$r = $pre->execute(); // XXX
	header('Location: ./subject.php');
}


