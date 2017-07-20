<?php
// admin/inquiry_list.php
require_once( __DIR__ . '/init_auth.php');

// ページ数取得
$page_num = abs((int)@$_GET['p']);
// 1Pageあたりの要素数
$per_page = 10;

// sort情報を取得する
$sort = (string)@$_GET['sort'];
//var_dump($sort);
// 軽くvalidateしておく
// (第一種)ホワイトリストで値を整理しておく
$sort_white_list = array (
    'id' => 'inquiry_id',
    'id_desc' => 'inquiry_id DESC',
    'response_date' => 'response_date',
    'response_date_desc' => 'response_date DESC',
);
// if (  ($sortが空文字か？)&&(ホワイトリストに存在する？)  ) 
if ( ('' === $sort)||(false === isset($sort_white_list[$sort])) ) {
    // ホワイトリストにない、又は空文字ならデフォルト値にしておく
    $sort = 'id_desc';
}
$sort_sql_e = $sort_white_list[$sort];
$smarty_obj->assign('sort', $sort); // ソート条件を渡しておく
//var_dump($sort);
//var_dump($sort_sql_e);

// 検索ワードを取得する
$find_string = array(); // 検索文字列保存用
//
foreach(['name', 'email', 'birthday_from', 'birthday_to'] as $p) {
    $find_string[$p] = (string)@$_GET[$p];
}
//var_dump($find_string);
// XXX 誕生日等のvalidateをするならここで

// 取得した検索ワードをHTML側で表示する
$smarty_obj->assign('find_string', $find_string);
// 「sort順番を変えるとき」用のURIパラメタの作成
// XXX foreachを、本当はまとめると、よりよい
$awk = array();
foreach($find_string as $k => $v) {
    if ('' !== $find_string[$k]) {
        $awk[] = "{$k}=" . rawurlencode($find_string[$k]);
    }
}
//var_dump($awk);
$uri_params = implode('&', $awk);
//var_dump($uri_params);
$smarty_obj->assign('uri_params', $uri_params);

// 一覧をDBから取得して
// DBハンドルを取得
$dbh = get_dbh();
//
$bind_data = array();
$where_array = array();
// プリペアドステートメント
$sql = 'SELECT * FROM inquirys ';
$sql_count = 'SELECT count(inquiry_id) FROM inquirys ';

// SQLを動的に追加
// emailの検索(完全一致)
if ('' !== $find_string['email']) {
    $where_array[] = 'email=:email';
    $bind_data[':email'] = $find_string['email'];
}
// nameの検索(LIKE句)
if ('' !== $find_string['name']) {
    $where_array[] = 'name LIKE :name';
    // LIKE句用のエスケープ処理
    $name_e = 
        str_replace(  array('\\'  , '%'  , '_')
                    , array('\\\\', '\\%', '\\_')
                    , $find_string['name']);
    //
    $bind_data[':name'] = "{$name_e}%"; // 性能重視
    //$bind_data[':name'] = "%{$find_string['name']}%"; // 利便性重視
}
// birthdayの検索(範囲検索 BETWEEN)
if ('' !== $find_string['birthday_from']) {
    if ('' !== $find_string['birthday_to']) {
        // birthday_fromあり、birthday_toあり
        $where_array[] = 'birthday BETWEEN :birthday_from AND :birthday_to';
        $bind_data[':birthday_from'] = $find_string['birthday_from'];
        $bind_data[':birthday_to'] = $find_string['birthday_to'];
    } else {
        // birthday_fromあり、birthday_toなし
        $where_array[] = 'birthday >= :birthday_from';
        $bind_data[':birthday_from'] = $find_string['birthday_from'];
    }
} else if ('' !== $find_string['birthday_to']) {
    // birthday_fromなし、birthday_toあり
    $where_array[] = 'birthday <= :birthday_to';
    $bind_data[':birthday_to'] = $find_string['birthday_to'];
}

// WHERE句の作成
if (array() !== $where_array) {
    // WHERE句部分を作って
    $buf = ' WHERE ' . implode(' and ', $where_array);
    // SQLに結合
    $sql .= $buf;
    $sql_count .= $buf;
}

// SQLの締め
$sql .= " ORDER BY {$sort_sql_e} LIMIT :limit_start, :limit_num ;";
$sql_count .= " ;";
//var_dump($sql);
//var_dump($sql_count);

// count用のbind_dataを保存しておく
$bind_data_count = $bind_data;

// LIMIT用のbindデータを入れる
$bind_data[':limit_start'] = $page_num * $per_page;
$bind_data[':limit_num'] = $per_page;

$pre = $dbh->prepare($sql);
//var_dump($sql);

// 値のバインド
foreach($bind_data as $k => $v) {
    $pre->bindValue($k, $v);
}

// 実行
$r = $pre->execute(); // XXX エラーチェック省略

// データを取得
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
//var_dump($data);

// テンプレートにデータを渡して
$smarty_obj->assign('inquiry_list', $data);

// レコード数をカウントする
$pre_count = $dbh->prepare($sql_count);
// 値のバインド
foreach($bind_data_count as $k => $v) {
    $pre_count->bindValue($k, $v);
}
// SQLを実行
$r = $pre_count->execute(); // XXX エラーチェック省略
// レコード件数を取得
$rec_num = $pre_count->fetchAll();
$rec_num = $rec_num[0][0];
//var_dump($rec_num);

// 最大Page数の計算(全体要素数/1Page要素数:端数切り上げ):0 startにするので -1
$max_page_num = ceil($rec_num / $per_page) - 1;
//var_dump($max_page_num);

// 「前のPage」と「次のPage」のページ数を設定
$smarty_obj->assign('next_page', $page_num + 1);
$smarty_obj->assign('back_page', $page_num - 1);
// ボタン制御
$smarty_obj->assign('back_page_flg', (0 === $page_num)? false : true );
$smarty_obj->assign('next_page_flg', ($page_num >= $max_page_num)? false : true );

// 表示する
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('admin/inquiry_list.tpl');
