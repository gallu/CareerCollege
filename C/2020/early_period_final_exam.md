# 2020年度 前期 期末試験

試験の回答は、以下の通りにすること。

- １問あたり１ファイルに記述。ファイル名は「1.c」「2-1.c」等とする。拡張子は.cとする

試験の注意事項は以下の通り

- いずれも「C言語」のコードで書く事。コンパイル(採点)はgccで行うが、windowsのclコマンドと同じもの、と考えてよい
- 試験なので「周囲との相談」「他人の答案の覗き見」は不許可
- ネット等を使って調べるのは許可
- コードをコンパイルなどして確認することは推奨
- いずれの問題も「書いてある点数」を満点とし、問題があったら適宜減点する

提出は、以下の通り

- 授業内に提出する場合は、ファイルサーバ内の所定のフォルダの中に「自分の名前のフォルダ」を作成して、そこに回答ファイル一式を提出
- 授業外で提出する場合は「自分の名前のフォルダ」に回答ファイル一式を入れた状態でzip形式で固めて教務経由で提出(提出期限は9/7)

## (問1): if

### (問1-1): 5点

まず、変数iに数値19を代入しなさい。    
次に、以下のif文を書きなさい

- もし変数iが19以下なら"under 20"と出力をしなさい    

### (問1-2): 5点

まず、変数iに数値19を代入しなさい。    
次に、以下のif文を書きなさい

- もし変数iが20以上なら"upper 20"と出力をしなさい    
- それ以外なら"under 20"と出力をしなさい    

## (問2): switch: 10点

まず、変数cに文字'a'を代入しなさい(文字列ではない点に注意)。    
次に、以下のswitch文を書きなさい

- もし変数cが'a'または'A'なら"apple"と出力をしなさい
- もし変数cが'b'または'B'なら"bear"と出力をしなさい
- もし変数cが'c'または'C'なら"cow"と出力をしなさい
- もし変数cが上述以外なら"unknown"と出力をしなさい


## (問3): for: 10点

かけ算の「九九」を、 1 * 1 から 9 * 9 まで出力するコードを、for文を使って書きなさい。

## (問4): while: 10点

かけ算の「九九」を、 1 * 1 から 9 * 9 まで出力するコードを、while文を使って書きなさい。

## (問5): 配列: 10点

「以下の3つの文字列」の配列を作成しなさい。    

- "abc"
- "xyz"
- "TECH.C."

## (問6): 構造体: 10点

以下の各要素を持つ構造体を作成しなさい。    
構造体の名前は「item」とします。    

- id を、int型で
- price を、int型で
- name を、文字型(char[16])で


## (問7): 関数: 10点

関数「test_func」を作成しなさい。    
test_func()は、以下のように作成しなさい。    

- 引数は、問6の構造体のポインタ(* の付いた形)
- 処理として以下を行いなさい
  + idに10を入れる
  + priceに123456を入れる
- 戻り値はvoid

また、問6の構造体を書いて、test_func()を呼び出しなさい。

## (問8): ファイル: 10点

以下の一連の処理を書きなさい。    

- ファイル名"./8.c"を、読み込み用にopen
- ファイルのすべての行を(1行づつ)読み込み、出力
- openしたファイルを閉じる

