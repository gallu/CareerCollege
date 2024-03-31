

## match式

### サンプル回答

```
<?php
// 変数 i に、`random_int(0, 2)` で、0～2の間の乱数を代入しなさい。  
$i = random_int(0, 2);
// match式を作成します。
$s = match($i) {
    0 => 'Zero',    // - 変数 i が 0 なら、"Zero" と出力しなさい。
    1 => '1st',     // - 変数 i が 1 なら、"1st" と出力しなさい。
    default => 'any', // - 変数 i が 上述以外なら、 "any" と出力しなさい。
};
echo $s;
```

### 実行例

```
Zero
```

乱数を使っているので、1st や any になる可能性があります。  

### 解説

match式の書き方です。  
今回は「変数に受けとって」「echoで出力」としましたが、直接echoで出力してしまってもOKです。  
defaultの下りはif文やswitchの所と同様です。  

## 関数の作成

### サンプル回答

```
<?php
declare(strict_types=1);
/*
- 関数名は func_1
- 第一引数は「int または float型」で、変数名 num
- 第二引数は「null または string型」で、変数名 name
- 第三引数は、bool 型で、変数名 flg。デフォルト値はfalse
- 戻り値の型は array
*/
function func_1(int|float $num, ?string $name, bool $flg = false): array {
    // - 第一引数、第二引数、第三引数の値をそれぞれ要素にして、配列を作成
    $arr = [$num, $name, $flg];

    // - 作成した配列をreturn
    return $arr;
}

// 上述で作った関数に適当な引数を与えて実行し
$r = func_1(3.14, 'name');

// 結果を var_dump() で出力しなさい。  
var_dump($r);
```

### 実行例

```
array(3) {
  [0]=>
  float(3.14)
  [1]=>
  string(4) "name"
  [2]=>
  bool(false)
}
```

### 解説

「関数の作成」「引数と戻り値の型指定」「型指定のunion(複数の型指定)」「デフォルト値を持つ引数」といった、関数を作成する上で基本となる要素が詰まっています。  
第二引数の型指定は `?string` としていますが、これは `string|null` でもOKです。  
また、関数をcallする時、サンプルでは「デフォルト値を持つ引数の値を省略」していますが、これについても「省略」「明示的に渡す」のどちらでもOKです。  
関数は、次にやる「クラスのメソッド」にたどり着くための重要な技術なので、不明点がある時はしっかりと復習しておきましょう。  
`declare(strict_types=1);` は「型指定をより厳格に適用する」ためのものです。なくても「試験における採点のマイナス」はない、としますが、実務では「必須」である事も多いので、できるだけ意識して書くようにしましょう。  


## RDB

### SELECT 1

#### サンプル回答

```
SELECT * FROM items WHERE item_id=1;
```

### SELECT 2

#### サンプル回答

```
SELECT * FROM items WHERE price BETWEEN 1000 AND 2000 ORDER BY price DESC LIMIT 20 OFFSET 0;
```

#### 解説

「ｎ以上ｍ以下」なので BETWEEN を使うのが適切ですが、以上と以下をAND条件で括ってもOKです。  
その場合、以下のようなSQLになるでしょう。  

```
SELECT * FROM items WHERE price >= 1000 AND price <= 2000 ORDER BY price DESC LIMIT 20 OFFSET 0;
```

また、`OFFSET 0` を明記してますが、これも、0なので「省略してもOK」です。  

### SELECT 3

#### サンプル回答

```
SELECT *
FROM items
LEFT JOIN categories USING(category_id)
WHERE items.name LIKE '%本%'
ORDER BY items.price DESC
LIMIT 20 OFFSET 0;
```

#### 解説

JOINは、適切に動くものであれば `RIGHT JOIN` でも `INNER JOIN` でもOKとします。  
また、同じカラム名なので `USING` を使っていますが、`ON items.category_id = categories.category_id` でもOKです。  

### トランザクション

#### サンプル回答

```
BEGIN;
SELECT * FROM item_stocks WHERE item_id=3;
-- (本来はここで「在庫数が足りているか?」という判断をしますが、今回はSQL文だけなのでオミットします)
UPDATE item_stocks SET stock_num=stock_num-1 WHERE item_id=3;
COMMIT;
```

#### 解説

`-- ` はSQL用の行コメント文です。  
なくてもOKですが、あるとわかりやすくなる事も多いので、覚えておくとよいでしょう。  

## PHPを使ったRDB

### サンプル回答

```
<?php
declare(strict_types=1);

/* RDBへの接続 */
$host = "localhost";
$dbname = "tech_rdb";
$user = "tech_rdb_u";
$pass = "tech_rdb_p";

$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8mb4";
$options = [
    // 必須
    PDO::ATTR_EMULATE_PREPARES => false,  // エミュレート無効
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,  // 複文無効
    // お好み
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // 結果セットの対応するカラム名にふられているものと同じキーを付けた 連想配列として各行を返す
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // エラーが発生した場合、PDOException をスロー
];

try {
    $dbh = new PDO($dsn, $user, $pass, $options);
} catch(PDOException $e) {
    echo "into catch <br> \n";
    echo $e->getMessage();
    return ;
}

/* レコードの取得 */
$item_id = 1;
try {
    // プリペアドステートメント(準備された文)の作成
    $sql = 'SELECT * FROM items WHERE item_id = :item_id;';
    $pre = $dbh->prepare($sql);
    // プレースホルダに値をバインド
    $pre->bindValue(':item_id', $item_id, PDO::PARAM_INT);
    // SQLを実行
    $r = $pre->execute();

    // データを取得
    $datum = $pre->fetch();
    var_dump($datum);
} catch(PDOException $e) {
    echo "into catch : select <br> \n";
    echo $e->getMessage();
    return ;
}
```

### 解説

ポイントは以下の通りです。  

- dsnで文字コードを指定している事
- optionsで、必須に書いてある2つが指定されている事
- プリペアドステートメントを使っている事
- SQLは文字列連結や変数の埋め込みなどをしておらず、1本のstringになっている事

## 日付

### サンプル回答

```
<?php
declare(strict_types=1);

// 現在の年月日時分秒を出力するコードを書きなさい。フォーマットは任意としますが、悩む場合、 DATE_ATOM 定数を使うとよいでしょう。  
echo date(DATE_ATOM) , "\n"; // date()関数
echo (new DateTime())->format(DateTimeInterface::ATOM) , "\n"; // DateTimeクラス
echo "\n";

/* 次に、今日を含む、今日から7日前までを1日毎に出力するコードを書きなさい。 */
// 関数と数値計算
$t = time();
for($i = 0; $i < 7; ++$i) {
    echo date(DATE_ATOM, $t) , "\n";
    $t -= 86400;
}
echo "\n";

// クラス
$dp = new DatePeriod(
    new DateTime(),
    DateInterval::createFromDateString('-1 day'),
    6 , // 反復回数。 返される結果の数は、この値よりひとつ大きくなります。 なぜなら、デフォルトでは結果セットに開始日が含まれているからです。
);
foreach($dp as $d) {
    echo $d->format(DateTimeInterface::ATOM) , "\n"; 
}
```

### 解説

現在時刻を取得する方法は複数あるので、いずれか1つ書ければOKです。  
繰り返しについても、上述サンプル以外にもいくつか書き方があります。どの書き方でも「結果、現在日時から7日前までが1日刻みで取得できればOK」ですが、どのように動いているのか? は把握しておきましょう。  

## hash

文字列 "abc" を、sha-256 と sha-512 でhash化し、hash値を出力するコードを書きなさい。

### サンプル回答

```
<?php
declare(strict_types=1);

$s = 'abc';

echo hash('sha256', $s) , "\n";
echo hash('sha512', $s) , "\n";
```

## HTML formからのデータの取得

### サンプル回答

```
<?php
declare(strict_types=1);

$input_1 = (string)($_POST['hoge'] ?? '');
$input_2 = (string)($_POST['foo'] ?? '');

echo htmlspecialchars($input_1) , "<br>\n";
echo htmlspecialchars($input_2) , "<br>\n";
```

### 解説

データの取得方法はいろいろあるかと思いますので、サンプル以外でも「取得できる」ならOKとします。  
NULL合体演算子などは、エラーが抑止できるので便利ですが、テストではそこまでこだわらないものとします。  

出力時に `htmlspecialchars()` を使うのは必須です( `htmlentities()` でもOKです)。  
対象バージョンの想定が「PHPの最新(2024/03/31現在で、8.3.4)」なので第二引数は省略してもOKですが、古いバージョンを見据えると、明示的に `ENT_QUOTES` を含むようにするのも丁寧でしょう。   

## ファイルのダウンロード(csv)

### サンプル回答

```
<?php
declare(strict_types=1);

// アップロードのerrorチェック
if (UPLOAD_ERR_OK !== $_FILES["zip_file"]["error"]) {
    echo "upload error";
    exit;
}

// mime typeを確認
$type = mime_content_type($_FILES["zip_file"]["tmp_name"]);
if ('text/csv' !== $type) {
    echo "type error";
    exit;
}

// CSVの分解
$fobj = new SplFileObject($_FILES["zip_file"]["tmp_name"]);
$fobj->setFlags(SplFileObject::READ_CSV);
foreach ($fobj as $no => $row) {
    // 最後の空行をはじく
    if ([null] === $row) {
        continue;
    }

    // 文字コードを変換
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS-win');
    var_dump($row);
}
```

### 解説

ポイントは以下の通りです。

- $_FILES のデータのうち`name`, `full_path`, `type` は、実処理に使ってはいけません。使ってよいのは `tmp_name`, `error`, `size` だけになります
- `tmp_name` のファイルを直接読み込めばよいので、作業ディレクトリ等へのcopyは不要です(書いても、テストとしてはNGにはしませんが、実務だとNGです)
- CSVの分解は、`SplFileObject()` でも `fopen()`からの`fgetcsv()`でもOKです。それ以外の方法はNGの可能性が高いので、気になる時は質問をしてください
- `mb_convert_encoding()` は、配列を扱う事ができるようになっているので、サンプルの通りでOKです。古いブログ等でもうちょっと複雑なコードがありますが、間違いやすいのでお勧めしません

## Cookie

### サンプル回答

```
<?php // Cookieの設定
declare(strict_types=1);
ob_start();

setcookie('tmp', 'hoge');

echo 'cookie set';

ob_end_flush();
```

```
<?php // Cookieの読み込み
declare(strict_types=1);

var_dump($_COOKIE['tmp']);
```

### 解説

Cookieの設定には `setcookie()` 関数、読み込みは `$_COOKIE` 変数を使います。  
`ob_start();` の有無は、テストの採点には影響しないものとします。実務ではあった方が圧倒的に事故を防げるので、覚えておくとよいでしょう。


## セッション

### サンプル回答

```
<?php // sessionの設定
declare(strict_types=1);
ob_start();
session_start();

$_SESSION['tmp'] = 123;

echo 'session set';

ob_end_flush();
```

```
<?php // sessionの読み込み
declare(strict_types=1);
ob_start();
session_start();

var_dump($_SESSION['tmp']);
```

### 解説

セッションの設定と読み込みは `$_SESSION` 変数を使います。  
`ob_start();` の有無は、テストの採点には影響しないものとします。実務ではあった方が圧倒的に事故を防げるので、覚えておくとよいでしょう。  
`session_start();` はセッションを使う時には必須になります。  
