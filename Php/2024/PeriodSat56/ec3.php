<?php  // ec3.php
declare(strict_types=1);

// 商品基本
class BasicItem {
    private int $price;  // 価格(税込み)
    private string $name; // 商品名 / タイトル(書籍)
    // 一部略
    public function getName() {
        return $this->name;
    }    

    public function getTaxAmount(): int {
        return (int)($this->price / 110 * 100);
    }
}

// 書籍クラス定義
class BookItem extends BasicItem {
    // 変数(プロパティ)
    private string $isbn; // ISBN番号: 書籍のみ
    private array $author; // 著者[]: 書籍のみ

    // (以下略)
    public function getTitle() {
        // titleはnameのエイリアス
        return $this->getName();
    }
}

// 家電クラス定義
class HomeApplianceItem extends BasicItem {
    // 変数(プロパティ)
    private string $modelNumber; //型番: 家電のみ
    // 縦横高さ(mm単位)
    private int $vertical;
    private int $horizontal;
    private int $height;
    // 重さ(g)
    private int $weight;

    // (以下略)
}

