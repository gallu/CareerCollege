# 2023年度 後期 期末試験

試験の回答は、以下の通りにすること。

- １問あたり１ファイルに記述。ファイル名は「問題番号.php(例: 1.php)」とする。拡張子は.phpであること
- 文字コードはUTF-8にすること

試験の注意事項は以下の通り

- 試験なので「周囲との相談」「他人の答案の覗き見」は不許可
- ネット等を使って調べるのは許可
- コードやSQLを勉強用サーバ(dev2.m-fr.net)で確認するのは推奨
- いずれの問題も「書いてある点数(記載がない場合は10点)」を満点とし、問題があったら適宜減点する

提出方法はテストの終了時に告知します。  
「テスト当日に休んだ」「補習」などの場合は、教務経由で提出をしてください。  


## (問1) CSVファイルのread

/tmp/users.csv のCSVファイルを「CSVファイルとして」読み込んで出力するコードを書きなさい。  
CSVファイルはSJISなので、出力時にUTF-8に文字コード変換しなさい。

## (問2) 6時間後の日付

プログラムを実行した瞬間から6時間後の時刻(年月日時分秒)を出力しなさい。  
フォーマットは DATE_ATOM 定数を使いなさい。  

## (問3) form

以下のHTMLファイルがあるとします。  

```
<!doctype html><!-- q3.html -->
<form action="q3.php" method="POST">
1<input type="text" name="input_1"><br>
2<input type="text" name="input_2"><br>
<br>
<button>送信</button>
</form>
```

入力情報を2つとも取得して出力するコードを書きなさい。  
セキュリティへの配慮がないと減点になります。  

## (問4) SQL

RDBの tech_rdb databaseに接続をします。  
接続情報は以下の通りです。  

- サーバ名: localhost
- database名: tech_rdb
- 接続ユーザ名: tech_rdb_u
- 接続パスワード: tech_rdb_p

(コードは、授業内で作成した dbh.php を使うと良いでしょう)。  

prefecture_table テーブルのレコード全件を取得して、 `var_dump()` で出力しなさい。

## (問5) SQL(検索)

以下のHTMLファイルがあるとします。  

```
<!doctype html><!-- q5.html -->
<form action="q5.php" method="POST">
都道府県コード<input type="text" name="prefecture_code"><br>
<br>
<button>送信</button>
</form>
```

以下の処理を実装しなさい。  

- RDBの tech_rdb databaseに接続する
- prefecture_table テーブルの 「prefecture_code カラムが入力情報と等しいレコード」を検索する
  + データがあったら表示する
  + データがなかったら「ない」と表示する

セキュリティの配慮がない場合は減点となります。  

## (問6) SQL(検索)+JOIN

以下のHTMLファイルがあるとします。  

```
<!doctype html><!-- q6.html -->
<form action="q6.php" method="POST">
都道府県コード<input type="text" name="prefecture_code"><br>
<br>
<button>送信</button>
</form>
```

以下の処理を実装しなさい。  

- RDBの tech_rdb databaseに接続する
- address_books テーブルの prefecture_code カラムが入力情報と等しいレコードを、 birthday が古い順番に 20件 検索する
    + 加えて、prefecture_tableの情報をJOINして、都道府県名(prefecture_name)を取得する
- 上述で取得できたレコードを `var_dump()` で出力する

セキュリティの配慮がない場合は減点となります。  

## (問7) クラス基礎構文

クラスを作成します。  
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。  

```
クラス名 Hoge
プロパティ
    num int型
    str string型
コンストラクタ
    引数で２つの値を受け取り、それぞれnumとstrのプロパティに代入する
メソッド
    メソッド名 getNum
    引数 なし
    処理 なし
    戻り値 プロパティ num の値

    メソッド名 getStr
    引数 なし
    処理 なし
    戻り値 プロパティ str の値
```

上述のクラスを作成し、getNum()とgetStr()のメソッドをcallして結果を `echo` または `var_dump()` で出力しなさい。

## (問8) クラス基礎構文

クラスを作成します。  
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。  

```
クラス名 Hoge
プロパティ
    num int型
コンストラクタ
    引数で値を受け取り、numのプロパティに代入する
メソッド
    メソッド名 getNum
    引数 なし
    処理 なし
    戻り値 プロパティ num の値
```

```
クラス名: Foo
継承元クラス名: Hoge
プロパティ
    str string型
コンストラクタ
    引数は2つ(num と str)
    親のコンストラクタを起動する(引数にはnumの値を渡す)
    引数でstrの値を受け取り、strのプロパティに代入する
メソッド
    メソッド名 getStr
    引数 なし
    処理 なし
    戻り値 プロパティ str の値

    メソッド名 output
    引数 なし
    処理 プロパティ num と、プロパティ str の内容を(echo 等で)出力する
    戻り値 なし

```

上述のクラスを作成し、Foo クラスのインスタンスを作成、 `output()` メソッドをcallしなさい。  

## (問9) クラス基礎構文

クラスを作成します。  
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。  

```
トレイト名 HogeTrait
メソッド
    メソッド名 output
    引数 no string型, name string型
    処理 引数の2つの値を出力する
    戻り値 なし
```

```
クラス名 Hoge
プロパティ
    なし
コンストラクタ
    なし
使うトレイト
    HogeTrait
メソッド
    なし
```

上述のクラスとトレイトを作成し、Hoge クラスのインスタンスを作成、 `output()` メソッドをcallしなさい。  
`output()` のメソッドの引数には、自分の学籍番号と名前を使いなさい。  

## (問10) クラス基礎構文

クラスを作成します。  
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。  

```
インタフェース名 HogeInterface
    メソッド名 add
    引数
        i int型
        j int型
```

```
クラス名 Hoge
継承インタフェース HogeInterface
プロパティ
    なし
コンストラクタ
    なし
メソッド
    アクセス権 protected
    メソッド名 isBackOrFront
    引数 なし
    処理 random_int(0, 1)で乱数を作成する
    戻り値 乱数が0ならfalseを返す。乱数が1ならtrueを返す

    メソッド名 add
    引数
        i int型
        j int型
    処理 2つの引数を加算する
    戻り値 加算した値
```

上述のインタフェースとクラスを作成しなさい。  

## (問11) 難問: 硬貨の選択

500 円玉を a 枚、100 円玉を b 枚、50 円玉を c 枚持っています。これらの硬貨の中から何枚かを選び、合計金額をちょうど x 円にする方法は何通りあるでしょうか？  
クラスを作成し、以下の仕様に沿って実装しなさい。  

```
プロパティ
    a int型
    b int型
    c int型
    x int型

コンストラクタ
    a, b, c, xの4つの引数をvalidate(内容は下記制約を参照)
        制約に対して不適切な入力なら、例外を投げて処理終了
    それぞれのプロパティに値を代入

メソッド
    処理  a, b, c, x の値で「何通りあるか」を計算する
    戻り値 「何通りあるか」の数値
```

数値の制約は以下の通りです。  

- a, b, c ともに 0以上50以下 の整数
- a + b + c は、1以上
- x は、 50 以上 20000 以下、かつ50の倍数

