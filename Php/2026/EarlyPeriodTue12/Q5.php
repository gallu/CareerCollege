<?php  // Q5.php
declare(strict_types=1);

/*
以下のインタフェースを定義しなさい。
インタフェース名: HotelInterface
メソッド
    getSku()
    引数なし、戻り値 string

以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Hotel // ホテル
    継承インタフェース: HotelInterface
プロパティ:
string型 sku // 意味合いは 商品識別コード

また、コンストラクタを作成しなさい。
コンストラクタは、引数をプロパティに代入しなさい。

また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
getSku()
*/
interface HotelInterface {
    public function getSku(): string;
}

class Hotel implements HotelInterface {
    private string $sku; // 商品識別コード
    public function __construct(string $sku) {
        $this->sku = $sku;
    }

    public function getSku(): string {
        return $this->sku;
    }
}

