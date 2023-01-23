# 2022年度 後期 期末試験

試験の回答は、以下の通りにすること。    

- １問あたり１ファイルに記述。ファイル名は、問1なら「1.php」のようにする。拡張子は.phpとする
- 文字コードはUTF-8にすること

試験の注意事項は以下の通り    

- 試験なので「周囲との相談」「他人の答案の覗き見」は不許可
- ネット等を使って調べるのは許可
- コードやSQLを勉強用サーバ(dev2.m-fr.net)で確認するのは推奨
- いずれの問題も「書いてある点数」を満点とし、問題があったら適宜減点する

提出は、以下の通り

- 提出ファイルはzipで1ファイルにまとめる
- 授業内に提出する場合は、授業最後の指示に従って提出
- 授業外で提出する場合は教務経由で提出(提出期限は1/24)

## (問1) 分岐と反復: 10点

以下の処理をif文で実装しなさい。    

- 以下の処理を10回繰り返す
    - `random_int(0, 3)` で、0～3の間の整数をランダムに取得
    - 取得したデータが 0 なら「Zero」と出力します
    - 取得したデータが 1 なら「1」と出力します
    - 取得したデータが 2 なら「2nd」と出力します
    - 取得したデータが それ以外なら「any」と出力します

## (問2) クラス: 10点

以下のクラス定義を書きなさい。    
メソッドの中身(処理)は、空っぽのままでよい、とします。「// 処理」のコメント程度を書いておくとよいでしょう。    
メソッドは指定がない限りpublic、プロパティは指定がない限りprivateにしなさい。    

- Hogeクラス
    + コンストラクタ
    + getDataメソッド: 引数無し
    + setDataメソッド: 引数一つ
    + validateDataメソッド: 引数無し、protected
    + data プロパティ
    + counter プロパティ
- Fooクラス: Hogeクラスを継承すること
    + コンストラクタ：処理の先頭で「親のコンストラクタ」をcallすること
    + pushDataメソッド: 引数一つ
    + popDataメソッド: 引数無し


## (問3) 例外: 10点

`SplFileObject` クラスでファイルをopenする事ができますが、もし「存在しないファイル」を指定すると、例外が投げられます。  
「`SplFileObject` クラスで、例外が投げられる事」を考慮したコードを書きなさい。処理は「`SplFileObject`クラスを使ってファイルを開ける」だけでよい、とします。  
投げられる例外は `RuntimeException` ですが、キャッチできるのであればどのような書き方でもよい、とします。  

## (問4) formからの情報の取得: 10点

```
<form action="./4.php" method="POST">
タイトル: <input name="title"><br>
名前: <input name="name"><br>
<button>書き込む</button>
</form>
```

のformの「書き込む」ボタンを押した時に動く 4.php を書きなさい。    
処理は以下の通りとします。  

- 変数 $titme に、タイトルで入力された値を代入
- 変数 $name に、名前で入力された値を代入
- $titleと$nameを出力(適切なエスケープがない時は減点)

## (問5) RDB: 10点

PDOを使って「RDB(MySQL)」に接続するコードを書きなさい。    
接続情報は授業で使った、以下を用いるものとします。    

- mysql
- database名は `final_exam`
- サーバは `localhost`
- 接続ユーザ名は `final_exam_user`
- 接続パスワードは `final_exam_pass`

## (問6) SQL: 10点

database `final_exam` には、以下のテーブルが存在する。    

```
CREATE TABLE `f_exam` (
  `f_exam_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '' COMMENT '名前',
  `quantity` int(11) NOT NULL COMMENT '数量',
  `created_at` datetime NOT NULL COMMENT 'レコード作成日付',
  PRIMARY KEY (`f_exam_id`),
  UNIQUE KEY `f_exam_id` (`f_exam_id`)
) ENGINE=InnoDB CHARSET=utf8mb4 COMMENT='テストテーブル'
```

上述にデータを入れるコードを書きなさい。    

- DB接続ハンドルは問6のコードを使って良い。ので、 `require_once('./5.php');` でよい(別途書いてもよい)
- f_exam_id はAUTO_INCREMENT なので、INSERT文には書かないこと
- nameとquantity には好きな値を入れる
- created_at には「INSERTする瞬間の日時」を入れる
  + データはいずれも「外部から入ってきている」前提で、SQL-Injectionに注意すること

## (問7) 作成物: 40点

授業中に作成したものを提出しなさい。    
以下のチェックを行います。    
dev2.m-fr.netの、アクセス可能なURLを書きなさい。    

- TopPageにアクセス時、書き込んだ一覧が出力されていること(ページネーション込み): 10点
- 書き込めること: 10点
- 書き込んだメッセージへのコメントが書き込めること: 10点
- 削除キーに正しい値を入れた時に、記事が削除できる事: 10点
