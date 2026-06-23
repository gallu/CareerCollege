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
class Book extends Item {
    private string $title; // 書名
    
    public function __construct(int $price, string $title) {
        parent::__construct($price);
        $this->title = $title;
    }
    public function getTitle(): string {
        return $this->title;
    }

}
/*
「帝国ホテルの不思議」「740円(税別)」のデータで、 $book1 変数にインスタンスを作成。
消費税を計算してvar_dump()で出力。
 */
$book1 = new Book(740, "帝国ホテルの不思議");
var_dump( $book1->calculateTax() );

/*
「世界一わかりやすいプロジェクトマネジメント 第4版」「2980円(税別)」のデータで、 $book2 変数にインスタンスを作成。
*/
$book2 = new Book(2980, "世界一わかりやすいプロジェクトマネジメント 第4版");

/*
家電追加。クラス名は HomeAppliance で。
プロパティとして「価格 price 」「製品名 name 」を持つ。
Bookのうち「共通するもの」をまとめ、基底クラス Item にまとめて、BookもHomeApplianceも、Item継承クラスにすること
*/
class Item {
    private int $price; // 価格

    public function __construct(int $price) {
        $this->price = $price;
    }
    public function getPrice(): int {
        return $this->price;
    }
    public function calculateTax(): int {
        $tax = floor($this->price * 0.1); // 端数切捨て
        return (int)$tax;
    }
}
class HomeAppliance extends Item {
    private string $name;
    public function __construct(int $price, string $name) {
        parent::__construct($price);
        $this->name = $name;
    }
    public function getName(): string {
        return $this->price;
    }
}
/*
「冷蔵庫」「998000円(税別)」のデータで、 $appliance1 変数にHomeApplianceクラスのインスタンスを作成。
*/
$appliance1 = new HomeAppliance(998000, "冷蔵庫");

/*
「買い物かごの１つの商品」を表す CartItem クラスを作成。
プロパティは「商品情報 item」「個数 num」
コンストラクタで設定、ゲッターを作る。
*/
class CartItem {
    private Item $item;
    private int $num;
    public function __construct(Item $item, int $num) {
        $this->item = $item;;
        $this->num = $num;
    }
    public function getItem(): Item {
        return $this->item;
    }
    public function getNum(): int {
        return $this->num;
    }
}

/*
買い物かごクラスを作成する。名前は Cart 。
コンストラクタなし。

メソッド
pushItem(Itemインスタンス, 数量)
*/
class Cart {
    private array $items = []; // keyは数値, valueは item と num をもつクラスのインスタンス

    public function pushItem(Item $item, int $num) {
        $this->items[] = new CartItem($item, $num);
    }

    public function getTotal(): int {
        $total = 0;
        foreach ($this->items as $item) {
            $priceWithTax = $item->getItem()->getPrice() + $item->getItem()->calculateTax();
            $total += $priceWithTax * $item->getNum();
        }
        return $total;
    }
}

/*
Cartインスタンスを作成。

book1を1冊
book2を2冊
appliance1を1台

をそれぞれpushItem()。
 */
$cart = new Cart();
$cart->pushItem($book1, 1);
$cart->pushItem($book2, 2);
$cart->pushItem($appliance1, 1);
// var_dump($cart);

/*
Cartクラスに「合計金額算出」のメソッドを追加。
getTotal()

$cartインスタンスで getTotal() を呼んで、合計金額を出力する。
*/
var_dump($cart->getTotal());

