# PHP実務用試験

この試験は「自分の理解度を確認するため」のテストです。  
注意点

- "理解度の確認"なので「相談」「他人の答案の覗き見」「ChatWorkその他やBlogのコードをコピペ」は無意味です
- ネット等を使って調べるのはOKです。プロでも丸暗記はしていないので、普通にググる事は問題ありません
- コードやSQLは動かして確認しましょう
    - 実行環境は(すみませんが)自力で用意してください: ある程度まで相談には乗ります。教務経由で連絡してください

## match式

変数 i に、`random_int(0, 2)` で、0～2の間の乱数を代入しなさい。  
match式を作成します。
- 変数 i が 0 なら、"Zero" と出力しなさい。
- 変数 i が 1 なら、"1st" と出力しなさい。
- 変数 i が 上述以外なら、 "any" と出力しなさい。

## 関数の作成

以下の仕様に従った関数を作成しなさい。  

- 関数名は func_1
- 第一引数は「int または float型」で、変数名 num
- 第二引数は「null または string型」で、変数名 name
- 第三引数は、bool 型で、変数名 flg。デフォルト値はfalse
- 戻り値の型は array
- 処理は以下の通り
    - 第一引数、第二引数、第三引数の値をそれぞれ要素にして、配列を作成
    - 作成した配列をreturn

上述で作った関数に適当な引数を与えて実行し、結果を var_dump() で出力しなさい。  




## RDB

前提として、以下のテーブルがあるものとします。  

```
CREATE TABLE categories (
    category_id BIGINT UNSIGNED NOT NULL COMMENT 'カテゴリID',
    category_name VARCHAR(255) NOT NULL COMMENT 'カテゴリ名',
    PRIMARY KEY(category_id)
)CHARACTER SET 'utf8mb4', COMMENT='1レコードが「1つのカテゴリ」を意味するテーブル';

CREATE TABLE items (
    item_id BIGINT UNSIGNED NOT NULL COMMENT '商品ID',
    category_id BIGINT UNSIGNED NOT NULL COMMENT 'カテゴリID',
    name VARCHAR(255) NOT NULL COMMENT '商品名',
    price INT UNSIGNED NOT NULL COMMENT '商品価格',
    CONSTRAINT fk_items_category_id FOREIGN KEY (category_id) REFERENCES categories(category_id),
    PRIMARY KEY(item_id)
)CHARACTER SET 'utf8mb4', COMMENT='1レコードが「1つの商品」を意味するテーブル';

CREATE TABLE item_stocks (
    item_id BIGINT UNSIGNED NOT NULL COMMENT '商品ID',
    stock_num INT NOT NULL COMMENT '在庫数',
    CONSTRAINT fk_item_stocks_item_id FOREIGN KEY (item_id) REFERENCES items(item_id),
    PRIMARY KEY(item_id)
)CHARACTER SET 'utf8mb4', COMMENT='1レコードが「1つの商品の在庫数」を意味するテーブル';
```

また、カテゴリテーブルの内容は以下のものとします。  
```
MySQL [exam]> SELECT * FROM categories;
+-------------+---------------+
| category_id | category_name |
+-------------+---------------+
|           1 | 書籍          |
|           2 | 食品          |
|           3 | 家電          |
|           4 | 衣類          |
+-------------+---------------+
4 rows in set (0.00 sec)
```

itemsテーブルには、ある程度の量の商品が登録済みであるとします。  

### SELECT 1

商品ID 1 のデータを取得する SELECT 文を書きなさい。  

### SELECT 2

商品テーブルで、価格が 1,000円から2,000円までの商品を、商品金額の高い順に20レコード取得する SELECT 文を書きなさい。  

### SELECT 3

商品名に "本" の文字が含まれるものを、商品金額の高い順に20レコード取得する SELECT 文を書きなさい。  
このSELECT文には、category_name も含まれるように、JOINを追加しなさい。  

### トランザクション

商品の販売用のSQLを作成します。

- 商品ID 3 の商品在庫数を、item_stocks テーブルで確認
- (本来はここで「在庫数が足りているか?」という判断をしますが、今回はSQL文だけなのでオミットします)
- item_stocks テーブルの商品ID 3 の商品在庫数を1つ減らす

という2つのSQLを、1つのトランザクションの中で発行しなさい。  

## PHPを使ったRDB

PDOを使って、上述「SELECT 1」の設問にあるSQLの発行をし、取得したレコードを出力しなさい。  
なお、商品IDは `$item_id` という変数の中に入っている前提でコードを書きなさい。  
セキュリティ上好ましくない記述は減点対象になります。  

## 日付

現在の年月日時分秒を出力するコードを書きなさい。フォーマットは任意としますが、悩む場合、 DATE_ATOM 定数を使うとよいでしょう。  
次に、今日を含む、今日から7日前までを1日毎に出力するコードを書きなさい。  

## hash

文字列 "abc" を、sha-256 と sha-512 でhash化し、hash値を出力するコードを書きなさい。

## HTML formからのデータの取得

以下のformがあるとします。

```
<form action="./任意のプログラムファイル名.php" method="POST">
    入力1<input type="text" name="hoge"><br>
    入力2<input type="text" name="foo"><br>
    <button>送信</button>
</form>
```

このformの「送信」ボタンをclickしたときに動くコードを書きなさい。  
処理は以下の通りとします。  

- 「入力1」と「入力2」に入力されたデータを取得する
- セキュリティに気をつけつつ、入力されたデータを出力する

## ファイルのダウンロード(csv)

以下のformがあるとします。

```
<form action="./任意のプログラムファイル名.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="zip_file">
    <button>送信</button>
</form>
```

このformから、郵便番号CSVファイル( https://www.post.japanpost.jp/zipcode/dl/kogaki-zip.html で実際のファイルが取得可能です。「差分データ」が、ファイル容量が小さいのでテストなどもしやすいでしょう)をアップロードした時の処理を書きなさい。  
本来の業務であれば「RDB等への保存」となりますが、今回は試験なので「各レコードの配列を var_dump() で出力する」で処理しなさい。

注意点は以下の通りです。  

- 「CSV以外のファイルがアップロードされた」可能性を考えて、 mime_content_type でファイルの中身の確認をする
- 文字コードがShift-JISなので、UTF-8に変換する
- 「var_dump()で出力」時のエスケープ処理は考えなくてよい

## Cookie

「Cookie名 tmp, 値 hoge」のCookieを発行するコードを書きなさい。指定された値以外については「無指定」でも「任意に指定をする」でもよいとします。  
また、上述を含む、Cookieの値を読み込むコードを書きなさい。  
上述2つの機能は、1本のプログラムにまとめても、2本のプログラムに分けてもよいとします。  

## セッション

「セッション名 tmp, 値 123」のセッションを保持するコードを書きなさい。  
また、上述を含む、セッションの値を読み込むコードを書きなさい。  
上述2つの機能は、1本のプログラムにまとめても、2本のプログラムに分けてもよいとします。  
