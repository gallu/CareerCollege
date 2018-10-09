<?php // extends.php
class 商品 {
	private $商品名; // 書籍の場合は「タイトル」
	private $値段;
	private $説明文;
	private $会社; // メーカー もしくは 出版会社
}
//
class 書籍 extends 商品{
	private $ISBN;
	private $著者名;
}
// ---
class おもちゃ extends 商品{
	private $型番;
}



