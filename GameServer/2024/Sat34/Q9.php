<?php  // Q9.php

// 1から30までのループを、for文で作りなさい
// 値が奇数なら、その値をechoで出力しなさい
// 値が偶数なら、その値を「２倍にしてから」echoで出力しなさい
// 1 4 3 8 5 ... となるイメージです
for ($i = 1; $i <= 30; ++$i) {
    if ($i%2 === 1) {
        echo "{$i},";
    } else {
        echo $i * 2;
        echo ",";
    }
}

echo "<br>";
// 変数 trpg に、「D&D」「ソードワールド」「クトゥルフ」の３つの要素を持つ配列を作成しなさい
// 変数 trpg をvar_dumpで出力しなさい
$trpg = ["D&D", "ソードワールド", "クトゥルフ"];
var_dump($trpg);

echo "<br>";
// 変数 pc に、以下の値を持つ連想配列を作成しなさい
// キー: STR   値: 18
// キー: IQ   値: 10
// キー: DEX   値: 16
// キー: CON   値: 7
// 変数 pc の配列の中身を、foreachを使って「キーと値」すべてechoで出力しなさい
$pc = [
    "STR" => 18,
    "IQ" => 10,
    "DEX" => 16,
    "CON" => 7,
];
foreach($pc as $k => $v) {
    echo "{$k}: {$v} <br>";
}

echo "<br>";
// クラス PC1 を定義しなさい。中はからでよいです。
// PC1のインスタンスを作成して、var_dumpで出力しなさい
class PC1 {
}
$pc = new PC1();
var_dump($pc);

echo "<br>";
// クラス PC2 を定義しなさい。中には
// プロパティ int型 hp
// プロパティ int型 mp
// を定義しなさい。
// PC2のインスタンスを作成して、プロパティhpに100、プロパティmpに50を代入してからvar_dumpで出力しなさい
class PC2 {
    public int $hp;
    public int $mp;
}
$pc = new PC2();
$pc->hp = 100;
$pc->mp = 50;
var_dump($pc);

echo "<br>";
// クラス PC3 を定義しなさい。中には以下のメソッドを定義しなさい
// メソッド名: test
// 引数: なし
// 戻り値: なし
// 処理: "pc test"の文字をechoで出力
// PC3のインスタンスを作成し、メソッドtestを呼び出しなさい
class PC3 {
    public function test() {
        echo "pc test";
    }
}
//
$pc = new PC3();
$pc->test();


echo "<br>";
// クラス PC4 を定義しなさい。中には以下の定数を定義しなさい
// MAX_DAMAGE  99999
// クラス PC4の MAX_DAMAGE定数をechoで出力しなさい。
class PC4 {
    public const MAX_DAMAGE = 99999;
}
echo PC4::MAX_DAMAGE;


echo "<br>";
// クラス PC5 を定義しなさい。中には
// プロパティ int型 hp
// を定義しなさい。
// プロパティはprivateで定義して、アクセサを作成しなさい
// PC5のインスタンスを作成し、セッターでnumに100を設定、ゲッターで取り出したものをechoで出力しなさい。
class PC5 {
    private int $hp;

    public function setHp(int $num) {
        $this->hp = $num;
    }
    public function getHp(): int {
        return $this->hp;
    }
}
$pc = new PC5();
// $pc->hp = 100;
$pc->setHp(100);
echo $pc->getHp();

echo "<br>";
// クラス PC6 を定義しなさい。中には
// プロパティ int型 hp
// を定義しなさい。
// プロパティはprivateで定義して、ゲッターを作成しなさい
// コンストラクタで引数を受け取り、コンストラクタで「プロパティ hp」の初期値を代入しなさい
// PC6のインスタンスを引数75で作成し、ゲッターで プロパティ num を取り出したものをechoで出力しなさい。
class PC6 {
    private int $hp;
    
    public function __construct(int $h) {
        $this->hp = $h;
    }
    public function getHp(): int {
        return $this->hp;
    }
}
$pc = new PC6(75);
echo $pc->getHp();

echo "<br>";
// Item クラスを定義しなさい。中には
// プロパティ int型 price
// を定義しなさい。
// プロパティはprivateで定義して、ゲッターを作成しなさい
// コンストラクタで引数を受け取り、コンストラクタで「プロパティ price」の初期値を代入しなさい
//
// Potion クラスを定義しなさい。Itemクラスを継承しなさい。
// プロパティ string型 name
// を定義しなさい。
// プロパティはprivateで定義して、ゲッターを作成しなさい
// コンストラクタで引数を受け取り、コンストラクタで「親クラスのプロパティ price」「プロパティ name」の初期値を代入しなさい
//
// Potion クラスのインスタンスを作成し、priceとnameの値をechoで出力しなさい。
class Item {
    private int $price;
    public function __construct(int $p) {
        $this->price = $p;
    }
    public function getPrice(): int {
        return $this->price;
    }
}
class Potion extends Item {
    private string $name;
    public function __construct(string $n, int $p) {
        parent::__construct($p);
        $this->name = $n;
    }
    public function getName(): string {
        return $this->name;
    }
}
$p = new Potion("えりくさ", 1000);
echo $p->getName(), "<br>";
echo $p->getPrice();



