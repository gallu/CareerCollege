<?php  // Q3.php
declare(strict_types=1);

/*
クラス Book を作成する
*/
/*
プロパティとして price(価格), title(書名)がある。
コンストラクタで設定、ゲッターを作る。
*/
/*
消費税計算メソッド calculateTax() の実装
・自身のpriceのデータの10%を計算して返す
・戻り値はint端数切捨て
*/
class Book {
    private int $price; // 価格
    private string $title; // 書名
    
    public function __construct(int $price, string $title) {
        $this->price = $price;
        $this->title = $title;
    }
    public function getPrice(): int {
        return $this->price;
    }
    public function getTitle(): string {
        return $this->title;
    }

    public function calculateTax(): int {
        $tax = floor($this->price * 0.1); // 端数切捨て
        return (int)$tax;
    }
}
/*
「帝国ホテルの不思議」「740円(税別)」のデータで、 $book1 変数にインスタンスを作成。
消費税を計算してvar_dump()で出力。
 */
$book1 = new Book(740, "帝国ホテルの不思議");
var_dump( $book1->calculateTax() );

// 本何冊か追加
// 家電追加
// 買い物かご
