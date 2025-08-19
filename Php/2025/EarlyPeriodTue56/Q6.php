<?php  // Q6.php
/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Item // 商品
    プロパティ:
    int 型 price // 

コンストラクタ
    引数 1つ
    処理 引数が「商品配列」のkeyに存在していれば、値をpriceに代入
         keyに存在していなければ、例外を投げて処理終了

メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
    getPrice() / getID()
*/
class Item {
    private int $id;
    private int $price;
    public function __construct(int $id) {
        // 商品配列
        $item_list = [
            1 => 9400,
            2 => 1100,
            3 => 1900,
            4 => 8500,
            5 => 2900,
            6 => 3100,
            7 => 2100,
            8 => 7700,
            9 => 1500,
            10 => 2000,
        ];
        // 商品配列からデータを取得(DBからデータを取得)
        $price = $item_list[$id] ?? -1;
        if (-1 === $price) {
            throw new \Exception("存在しない商品ID: {$id}");
        }        
        // // 
        // $price = $item_list[$id] ?? throw new \Exception("存在しない商品ID: {$id}");
        
        // if (false === isset($item_list[$id])) {
            // throw new \Exception("存在しない商品ID: {$id}");
        // }        

        // データをプロパティに取り込む
        $this->id = $id;
        $this->price = $price;
    }
    public function getPrice(): int {
        return $this->price;
    }
    public function getID(): int {
        return $this->id;
    }
}

/*
クラス名: CartItem
プロパティ
    $item Itemインスタンス
    $num int 個数

コンストラクタ
    引数
        Itemインスタンス
        個数 = 1
    処理
        引数の値をプロパティに代入する
 */
class CartItem {
    private Item $item;
    private int $num;
    public function __construct(Item $item, int $num = 1) {
        $this->item = $item;
        $this->num = $num;
    }
    public function getNum(): int {
        return $this->num;
    }
    public function setNum(int $num): void {
        $this->num = $num;
    }
    public function getItem(): Item {
        return $this->item;
    }
}

/*
クラス名: Cart
プロパティ
    配列型 $cartItems // CartItemのhash配列: keyはitemID
メソッド
    メソッド名 pushItem
    引数 itemID, 個数
    処理 cartItems プロパティに積み込む
        「すでにある」場合は、個数を変更する

    メソッド totalPrice
    引数 なし
    処理 itemsプロパティのitemインスタンスのpriceの合計を求める
    戻り値 priceの合計値

    メソッド changeNum
    引数 itemID, 個数
    処理 cartItems プロパティの対象商品の個数を変更する
        「itemがない」時には新規に積み込む
 */
class Cart {
    private array $cartItems;
    public function pushItem(int $itemID, int $num): void {
        if (false === isset($this->cartItems[$itemID])) {
            // cartItemsに存在しない場合
            $cartItem = new CartItem(new Item($itemID), $num);
            $this->cartItems[$itemID] = $cartItem;
        } else {
            // cartItemsに存在する場合
            $this->cartItems[$itemID]->setNum($num);
        }
    }
    public function changeNum(int $itemID, int $num): void {
        // [memo]現在 pushItem と全く同じ仕様なので、いったん実装を pushItem に寄せる
        $this->pushItem($itemID, $num);
    }
    public function totalPrice(): int {
        $total = 0;
        foreach ($this->cartItems as $ci) {
            // 単価 * 個数
            $total += $ci->getItem()->getPrice() * $ci->getNum();
        }
        return $total;
    }
}
//
$cart = new Cart();
$cart->pushItem(1, 1);
$cart->pushItem(2, 5);
var_dump($cart->totalPrice());

$cart->changeNum(2, 1);
var_dump($cart->totalPrice());
