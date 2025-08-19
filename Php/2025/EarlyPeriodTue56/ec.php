<?php  // ec.php

// 1インスタンスが「1種類の書籍」を表すクラス
class Books {
    private string $title; // 書籍名/タイトル
    private string $published_at; // 出版日
    private string $publisher; // 出版社
    private array $author; // 著者名
    private string $isbn_13; // ISBN-13
    private int $price; // 値段(税込み)

    public function getPrice(): int {
        return $this->price;
    }
}


