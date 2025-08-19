<?php  // Q5.php
/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Item // 商品
    プロパティ:
    int 型 price // 

コンストラクタで引数をうけとり、プロパティ price を設定する。

メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
    getPrice()
*/
class Item {
    private int $price;
    public function __construct(int $p) {
        $this->price = $p;
    }
    public function getPrice(): int {
        return $this->price;
    }
}

/*
クラス名: Cart
プロパティ
    配列型 $items // Itemの配列
メソッド
    メソッド名 pushItem
    引数 Itemクラスインスタンス
    処理 itemプロパティに積み込む

    メソッド totalPrice
    引数 なし
    処理 itemsプロパティのitemインスタンスのpriceの合計を求める
    戻り値 priceの合計値
 */
class Cart {
    private array $items = []; // Itemの配列
    public function pushItem(Item $o): void {
        $this->items[] = $o;
    }
    public function totalPrice(): int {
        $total = 0;
        foreach ($this->items as $i) {
            $total += $i->getPrice();
        }
        return $total;
    }
}
//
$cart = new Cart();
$cart->pushItem( new Item(1200) );
$cart->pushItem( new Item(800) );
$cart->pushItem( new Item(4800) );
$total = $cart->totalPrice();
var_dump($total);
