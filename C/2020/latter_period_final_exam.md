# 2020年度 後期 期末試験

試験の回答は、以下の通りにすること。

- １問あたり１ファイルに記述。ファイル名は「1.c」「2-1.c」等とする。拡張子は.cとする

試験の注意事項は以下の通り

- いずれも「C言語」「C++」のコードで書く事。コンパイル(採点)はgccで行うが、windowsのclコマンドと同じもの、と考えてよい
- 試験なので「周囲との相談」「他人の答案の覗き見」は不許可
- ネット等を使って調べるのは許可
- コードをコンパイルなどして確認することは推奨
- いずれの問題も「書いてある点数」を満点とし、問題があったら適宜減点する

提出は、以下の通り

- 授業内に提出する場合は、ファイルサーバ内の所定のフォルダの中に「自分の名前のフォルダ」を作成して、そこに回答ファイル一式を提出
- 授業外で提出する場合は「自分の名前のフォルダ」に回答ファイル一式を入れた状態でzip形式で固めて教務経由で提出(提出期限は2/6)


## (問1)ポインタアドレスの表示: 10点

整数(int)型の変数「i」を定義し、そのポインタをprintfで出力するコードを書きなさい。    


## (問2)構造体ポインタの問題: 10点

以下の構造体があるとします(コードにコピペするとよいでしょう)。    

```
typedef struct item {
  int price; // 価格
} ITEM;
```

main関数では、以下の処理をします。    

```
int main() {
  //
  ITEM item;
  // データの設定
  set_data(&item);

  // 表示
  printf("price: %d\n", item.price);

  return 0;
}
```

上述で出てくる関数 set_data の実装をしなさい。    
関数 set_data は「ポインタで受け取った構造体の中の price に値を設定する」処理を書きます。    
設定する価格は「1000」とします。    

## (問3)malloc / realloc を使った問題: 10点

malloc / realloc 関数を使って、以下の動きをするコードを書きなさい。    

- 「char *s」を宣言します
- 上述の変数 s に「charが10文字はいる領域」をmallocで割り当てます
- 変数 s に"abcdefg" を代入します(文字の終端(\0)に注意)
- 変数 s を、printf の %s で出力します
- 上述の変数 s に「charが36文字はいる領域」をreallocで割り当て(拡張し)ます
- 変数 s の、"abcdefg" の後ろに "hjiklmnopqr" を代入します(文字の終端(\0)に注意)
- 変数 s を、printf の %s で出力します

「エラーチェック」「free」がない場合は減点とします。    

## (問4)ポインタ演算の問題: 10点

以下の文字列があります。    

```
char s[] = "123456789";

```

この文字列を、ポインタ演算を使って「1文字づつ」「改行を入れながら」出力しなさい。    
出力結果は、以下を想定しています。    

```
1
2
3
4
5
6
7
8
9
```

## (問5)関数ポインタの問題: 10点

以下の関数があります。    

```
void test(int i, int j) {
    printf("i: %d, j: %d\n", i, j);
}

```

main関数で以下の処理を行いなさい。    

- 関数ポインタ fp を宣言する
- 変数 fp に test関数のポインタを代入する
- 変数 fp を使って関数を実行する

## (問6)C++でHello world: 10点

C++ で、 std::cout を使って "Hello world" を出力しなさい。    

## (問7)vectorを使った配列操作: 10点

まず、「10, 20, 30」の3つの整数(int)の入った配列を、vectorで作成しなさい。    
次に、上述で作った配列の全ての要素を出力しなさい。なお、変数宣言に auto は「使ってはいけない」とします。    

## (問8)mapを使った配列操作: 10点

まず、以下の配列を、mapで作成しなさい。    
keyはstrin、valueはdouble型とします。    

- key: "aaa",  value: 10.1
- key: "bbb",  value: 20.2
- key: "ccc",  value: 30.3

次に、上述で作った配列の全ての要素(keyとvalue)を出力しなさい。なお、変数宣言に auto は「使ってもよい」とします。    


## (問9-1)class コンストラクタ、デストラクタ、普通のクラス関数: 5点

class Hoge を作成しなさい。    
class Hoge には、以下の要素が含まれている、とします。    

- クラス変数 int i がある
- コンストラクタで「start」と出力する。クラス変数 i に999 を代入する
- デストラクタで「end」と出力する
- クラス関数 p() がある。この関数は「クラス変数 i の内容を出力する」という動きをする


## (問9-2)class 継承: 5点

class Foo を作成しなさい。    
class Foo には、以下の要素が含まれている、とします。    

- 上述で作成した class Hoge を継承する
- クラス関数 p2() がある。この関数は「クラス変数 i に+10してから、クラス変数 i の内容を出力する」という動きをする


## (問10): 10点

class Hogeとclass Foo、class Barを作成しなさい。  
各クラスにはそれぞれ以下の要素が含まれているとします。  

- Hoge
  + クラス内関数 p_func() を作成しなさい
    - 引数は「int型 を1つ」とします
    - この関数は純粋仮想関数として作成しなさい
- Foo
  + このクラスは「Hogeを継承」して作成しなさい
  + クラス内関数 t_func() を作成しなさい
    - 引数はなしとします
    - 処理は「文字列 "Foo#t_func" の出力」とします
  + クラス内関数 vt_func() を作成しなさい
    - 引数はなしとします
    - 処理は「文字列 "Foo#vt_func" の出力」とします
    - この関数は仮想関数として作成しなさい
- Bar
  + このクラスは「Fooを継承」して作成しなさい
  + クラス内関数 p_func() を作成しなさい
    - 引数は「int型 を1つ」とします
    - 処理は「文字列 "Bar::p_func" と、続いて引数の値を出力」とします
  + クラス内関数 t_func() を作成しなさい
    - 引数はなしとします
    - 処理は「文字列 "Bar#t_func" の出力」とします
  + クラス内関数 vt_func() を作成しなさい
    - 引数はなしとします
    - 処理は「文字列 "Bar#vt_func" の出力」とします

上述の結果として以下の動作が満たされる事を確認しなさい。

- Fooポインタ型の変数に、new演算子でBarクラスのインスタンスを作成する
- 上述インスタンスで p_func() を呼ぶと「文字列 "Bar::p_func" と、続いて引数の値を出力」が動く事
- 上述インスタンスで t_func() を呼ぶと「文字列 "Foo#t_func" の出力」が動く事
- 上述インスタンスで vt_func() を呼ぶと「文字列 "Bar#vt_func" の出力」が動く事
