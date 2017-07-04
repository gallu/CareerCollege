<?php
// admin/inquiry_list.php
require_once( __DIR__ . '/init_auth.php');

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

// 一覧をDBから取得して
// DBハンドルを取得
$dbh = get_dbh();
//
$bind_data = array();
$where_array = array();
// プリペアドステートメント
$sql = 'SELECT * FROM inquirys ';
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
    $sql .= ' WHERE ' . implode(' and ', $where_array);
}

// SQLの締め
//$sql = $sql . ' ORDER BY inquiry_id DESC;';
$sql .= ' ORDER BY inquiry_id DESC;';
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

// 表示する
error_reporting(E_ALL & ~E_NOTICE);
$smarty_obj->display('admin/inquiry_list.tpl');
