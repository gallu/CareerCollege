# 2021年度 後期 期末試験

試験の回答は、以下の通りにすること。    

- １問あたり１ファイルに記述。ファイル名は、問1なら「1.php」、問1-1なら「1-1.php」のようにする。拡張子は.phpとする
- 文字コードはUTF-8にすること

試験の注意事項は以下の通り    

- 試験なので「周囲との相談」「他人の答案の覗き見」は不許可
- ネット等を使って調べるのは許可
- コードやSQLを勉強用サーバ(dev2.m-fr.net)で確認するのは推奨
- いずれの問題も「書いてある点数」を満点とし、問題があったら適宜減点する

提出は、以下の通り

- 授業内に提出する場合は、Teamsの「前期期末テスト」フォルダの中に「自分の名前のフォルダ」を作成して、そこに回答ファイル一式を提出
- 授業外で提出する場合は「自分の名前のフォルダ」に回答ファイル一式を入れた状態でzip形式で固めて教務経由で提出(提出期限は1/23)


## (問1) 分岐

以下の処理をif文で実装しなさい。    

- $i に `random_int(0, 3)` の値を代入します
- $i が0なら「Zero」と出力します
- $i が1なら「1」と出力します
- $i が2なら「2nd」と出力します
- $i がそれ以外なら「any」と出力します

## (問2) 反復: 10点

以下の処理を実装します。

- 0から9までの整数を、1刻みで出力する

### (問2-1): 5点

上述を、for文で実装しなさい。

### (問2-2): 5点

上述を、while文で実装しなさい。

## (問3) file: 10点

PHPで、自分自身のファイル名は \_\_FILE\_\_ 定数で得られます。    
`SplFileObject` を使って自分自身をopenして、`foreach` を使って各行を出力しなさい    

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


## (問5) 日付関連: 10点

今の日時を yyyy/mm/dd hh:mm:ss のフォーマットとして出力するコードを書きなさい。    

## (問6) RDB: 10点

PDOを使って「RDB(MySQL)」に接続するコードを書きなさい。    
接続情報は授業で使った、以下を用いるものとします。    

- mysql
- database名は `tech`
- サーバは `localhost`
- 接続ユーザ名は `tech`
- 接続パスワードは `tech`

## (問7) SQL: 10点

database `tech` には、以下のテーブルが存在する。    

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

- DB接続ハンドルは問6のコードを使って良い。ので、 `require_once('./6.php');` でよい(別途書いてもよい)
- f_exam_id はAUTO_INCREMENT なので、INSERT文には書かないこと
- nameとquantity には好きな値を入れる
- created_at には「INSERTする瞬間の日時」を入れる
  + データはいずれも「外部から入ってきている」前提で、SQL-Injectionに注意すること

## (問8) 作成物

授業中に作成したものを提出しなさい。    
以下のチェックを行います。    
dev2.m-fr.netの、アクセス可能なURLを書きなさい。    

- TopPageにアクセス時、書き込んだ一覧が出力されていること(ページネーション込み): 10点
- 書き込めること: 10点
- 削除キーに正しい値を入れた時に、記事が削除できる事: 10点
