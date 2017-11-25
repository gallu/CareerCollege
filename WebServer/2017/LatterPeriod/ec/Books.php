<?php
// Books.php

class Books {
    //
    public function __construct($id) {
		// IDの軽いvalidate
			// ダメなら throw new ErrorException('invalid id');
		// DBから情報をSELECT
		// エラーなら throw new ErrorException('no item');
		// プロパティに取得できたデータを設定する
	}

    // メソッド
    public function getData(){
        // プロパティをhash配列にまとめて
        $data = []; // $data = array();
        $data['name'] = $this->name_;
        // 返す
        return $data;
	}

// プロパティ
private $name_;		// 書籍名
private $isbn_;		// ISBN(13)
private $author_;	// 著者名
private $publisher_;	// 出版社名
private $price_;		// 値段(税別)
private $release_date_;	// 発売日

}

