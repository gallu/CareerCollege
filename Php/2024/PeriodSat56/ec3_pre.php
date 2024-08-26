<?php  // ec3_pre.php

declare(strict_types=1);

// 書籍クラス定義
class BookItem {
    // 変数(プロパティ)
    private int $price;  // 価格(税込み)
    private string $title;   // タイトル
    private string $publisher;   // 出版社
    // (以下略)
    public function getTaxAmount(): int {
        return (int)($this->price / 110 * 100);
    }
}

// 家電
class HomeApplianceItem {
    // 変数(プロパティ)
    private int $price;  // 価格(税込み)
    private string $name; // 商品名
    private string $maker; // メーカ名
    // (以下略)
    public function getTaxAmount(): int {
        return (int)($this->price / 110 * 100);
    }
}
