# PHP応用用試験 解答例

## 関数の作成

### サンプル回答

```
<?php
declare(strict_types=1);
/*
- 関数名は func_1
- 第一引数は「int型」で、変数名 num
- 第二引数は「null または string型」で、変数名 name
- 第三引数は、bool 型で、変数名 flg。デフォルト値はfalse
- 戻り値の型は array
*/
function func_1(int $num, ?string $name, bool $flg = false): array {
    // - 第一引数、第二引数、第三引数の値をそれぞれ要素にして、配列を作成
    $arr = [$num, $name, $flg];

    // - 作成した配列をreturn
    return $arr;
}

// 上述で作った関数に適当な引数を与えて実行し
$r = func_1(3, 'name');

// 結果を var_dump() で出力しなさい。  
var_dump($r);
```

### 実行例

```
array(3) {
  [0]=>
  int(3)
  [1]=>
  string(4) "name"
  [2]=>
  bool(false)
}
```

### 解説

「関数の作成」「引数と戻り値の型指定」「デフォルト値を持つ引数」といった、関数を作成する上で基本となる要素が詰まっています。  
また、関数をcallする時、サンプルでは「デフォルト値を持つ引数の値を省略」していますが、これについても「省略」「明示的に渡す」のどちらでもOKです。  
関数は、次にやる「クラスのメソッド」にたどり着くための重要な技術なので、不明点がある時はしっかりと復習しておきましょう。  
`declare(strict_types=1);` は「型指定をより厳格に適用する」ためのものです。なくても「試験における採点のマイナス」はない、としますが、実務では「必須」である事も多いので、できるだけ意識して書くようにしましょう。  

## staticな変数の作成

### サンプル回答

```
<?php
declare(strict_types=1);
/*
- 関数名は func_2
- 第一引数はint 型で、変数名 num
*/
function func_2(int $num) {
    // - static な変数 i を宣言。初期値は0
    static $i = 0;

    // - 変数 i に、引数 num の値を足し算
    $i += $num;

    // - 変数 i の内容と改行を echo で出力
    echo "{$i} \n";
}

// 上述で作った関数に、以下の引数を与えて実行しなさい。  
// - 引数: 1
func_2(1);

// - 引数: 2
func_2(2);

// - 引数: 3
func_2(3);
```

### 実行例

```
1 
3 
6 
```

### 解説

「staticな変数」に関する設問です。  
通常、localな変数は「関数を抜けたタイミングで解放される」のですが、staticな変数は解放されず、データを保持する機能があります。  
利用頻度が高い技術ではないのですが、必要な時にはとても有用な技術なので、しっかりと覚えておきましょう。  

## 無名関数の作成

### サンプル回答

```
<?php
declare(strict_types=1);
/*
- 第一引数は「int型」で、変数名 num
- 第二引数は「int型」で、変数名 val
- 戻り値は「int型」
- 処理は以下の通り
    - num と val をかけ算して、その結果をreturn
*/
$fn = function(int $num, int $val): int {
    return $num * $val;
};
//
$r = $fn(2, 3);
var_dump($r);
```

### 実行例

```
int(6)
```

### 解説

無名関数は、特に最近、実務で使われる事が増えてきました。JavaScriptなどをやっている人は、なじみがあるかもしれません。  
あまり複雑なものを無名関数で組むとテストが大変だったりするのでさじ加減が重要ですが、「書ける」ようにはなっておきましょう。  

## 基本のクラスの作成

### サンプル回答

```
<?php
declare(strict_types=1);

// - クラス名は Klass_1
class Klass_1 {
    // - 定数を作成
    // - 定数名 DEF に、値 123(数値)
    public const DEF = 123;

    // - プロパティを作成
    // - プロパティ名 num  int型  デフォルト値 10
    private int $num = 10;
}
// 上述で定義したクラスのインスタンス(オブジェクト)を作成、var_dump() で出力しなさい。  
$obj = new Klass_1();
var_dump($obj);
```

### 実行例

```
object(Klass_1)#1 (1) {
  ["num":"Klass_1":private]=>
  int(10)
}
```

### 解説

クラスの基本です。  
プロパティと比較して、定数は書く頻度が少ないかと思うので、書式を忘れたら「ググって調べられる」スキルを身につけておくとよいでしょう。  

## 基本のクラスの作成 2

### サンプル回答

```
<?php
declare(strict_types=1);

// - クラス名は Klass_2
class Klass_2 {
    // - プロパティを作成
    // - プロパティ名 num  int型
    private int $num;

    // - コンストラクタを作成
    // - 第一引数は int 型で、変数名 i
    public function __construct(int $i) {
        if (123 === $i) {
            // - 引数の値が 123 なら、例外をthrowしなさい。例外のクラスは RuntimeException、メッセージは "value is not 123." としなさい
            throw new RuntimeException('value is not 123.');
        }
        // - 引数で与えられた値を、プロパティ numに代入
        $this->num = $i;
    }

    // - メソッドを作成
    // - メソッド名 getNum()
    //        - 引数はなし
    //        - 戻り値の型は int
    public function getNum(): int {
        // - プロパティ num の値をreturn
        return $this->num;
    }
}
// 上述で定義したクラスのインスタンス(オブジェクト)を作成しなさい。  
$obj = new Klass_2(999);
// 次に、getNum()を実行し、その結果を var_dump() で出力しなさい。  
var_dump( $obj->getNum() );

// また、「引数に 123を与えて例外が投げられる」ようにインスタンス(オブジェクト)を作成しなさい。  
try {
    $obj = new Klass_2(123);
} catch (RuntimeException $e) {
    // 例外を正しくキャッチし、エラーメッセージを出力しなさい。  
    echo $e->getMessage();
}
```

### 実行例

```
int(999)
value is not 123.
```

### 解説

「コンストラクタの作成」「引数を持つコンストラクタに値を渡す方法」「プロパティへの値の設定」「例外のthrowとcatch」いずれも、実務では極めて高頻度で出てくる技術になります。不安がある時は、しっかりと復習をしておきましょう。  

## 継承

### サンプル回答

```
<?php
declare(strict_types=1);

// - クラス名は Klass_3
class Klass_3 {
    // - プロパティを作成
    // - プロパティ名 num  int型
    private int $num;

    // - コンストラクタを作成
    // - 第一引数は int 型で、変数名 i
    public function __construct(int $i) {
        // - 引数で与えられた値を、プロパティ numに代入
        $this->num = $i;
    }

    // - メソッドを作成
    // - メソッド名 getNum()
    // - 引数はなし
    // - 戻り値の型は int
    public function getNum(): int{
        // - プロパティ num の値をreturn
        return$this->num;
    }
}
// - クラス名は Klass_3_Ex : Klass_3を継承する
class Klass_3_Ex extends Klass_3 {
    // - プロパティを作成
    // - プロパティ名 name  string型
    private string $name;

    // - コンストラクタを作成
    // - 第一引数は int 型で、変数名 i
    // - 第二引数は string 型で、変数名 s
    public function __construct(int $i, string $s) {
        // - 引数 i で与えられた値を、親のコンストラクタを呼び出して処理する
        parent::__construct($i);
        // - 引数 s で与えられた値を、プロパティ name に代入する
        $this->name = $s;
    }

    // - メソッドを作成
    // - メソッド名 getName()
    // - 引数はなし
    // - 戻り値の型は string
    public function getName(): string {
        // - プロパティ name の値をreturn
        return $this->name;
    }
}
// クラス Klass_3_Ex のインスタンス(オブジェクト)を作成しなさい。
$obj = new Klass_3_Ex(123, "name");
// また、プロパティnumとプロパティnameの値をそれぞれ var_dump() で出力しなさい。
var_dump($obj->getNum());
var_dump($obj->getName());
```

### 実行例

```
int(123)
string(4) "name"
```

### 解説

「クラスの継承」「parent::を使った親メソッドへのアクセス」です。  
継承もまた「非常によく使われる」技術です。乱用すると弊害もありますが、「書ける」ようにする事は必須です。  
parent::は、コンストラクタの場合は「自身の処理より前にまず親のメソッドをcallする」事が多いので、覚えておきましょう。  

## interface

### サンプル回答

```
<?php
declare(strict_types=1);

// - インタフェース名は Klass_4_Interface
interface Klass_4_Interface {
    // - メソッドを作成
    // - メソッド名 getNum()
    // - 引数はなし
    // - 戻り値の型は int
    public function getNum(): int;
}

// - クラス名は Klass_4 : Klass_4_Interface を実装する
class Klass_4 implements Klass_4_Interface {
    // - プロパティを作成
    // - プロパティ名 num  int型
    private int $num;

    // - コンストラクタを作成
    // - 第一引数は int 型で、変数名 i
    public function __construct(int $i) {
        if (123 === $i) {
            // - 引数の値が 123 なら、例外をthrowしなさい。例外のクラスは RuntimeException、メッセージは "value is not 123." としなさい
            throw new RuntimeException('value is not 123.');
        }
        // - 引数で与えられた値を、プロパティ numに代入
        $this->num = $i;
    }

    // - メソッドを作成
    // - メソッド名 getNum()
    // - 引数はなし
    // - 戻り値の型は int
    public function getNum(): int {
        // - プロパティ num の値をreturn
        return $this->num;
    }
}

// 上述で定義したクラスのインスタンス(オブジェクト)を作成しなさい。  
$obj = new Klass_4(777);
// 次に、getNum()を実行し、その結果を var_dump() で出力しなさい。  
var_dump( $obj->getNum() );
```

### 実行例

```
int(777)
```

### 解説

インタフェースは、特に最近「非常によく使われるようになった」ので、制約を含めてしっかりと覚えておきましょう。  
実装そのものは「基本のクラスの作成 2」と同じ内容になります。  

## trait

### サンプル回答

```
<?php
declare(strict_types=1);

// - トレイト名は SlackNotification
trait SlackNotification {
    // - メソッドを作成
    // - メソッド名 critical
    // - アクセス権 protected
    // - 第一引数は string 型で、変数名 message
    protected function critical(string $message) {
        // - echo でmessageを出力
        echo $message;
        // - コメントで `// [TODO]未実装` と記述
        // [TODO]未実装
    }
}

// - クラス名は Klass_5
class Klass_5 {
    // - トレイト SlackNotification を使えるようにする
    use SlackNotification;

    // - メソッドを作成
    // - メソッド名 test()
    // - 引数はなし
    public function test() {
        // - メソッド critical() を呼び出す。引数は "test call"
        $this->critical('test call');
    }
}
// 上述で定義したクラスのインスタンス(オブジェクト)を作成しなさい。  
$obj = new Klass_5();
// 次に、test()を実行しなさい。  
$obj->test();
```

### 実行例

```
test call
```

### 解説

Traitです。この技術も実務ではよく出てきます。  
protectedなメソッドの書き方、を含めて、自信がない人はしっかりと復習しておきましょう。  
また、試験にはでていませんが、継承とtraitの違い(is-aとhas-a)についても、今一度、ググったりして調べておくとよいでしょう。  

## 静的プロパティと静的メソッド

### サンプル回答

```
<?php
declare(strict_types=1);

// - クラス名は Klass_6
class Klass_6 {
    // - 静的プロパティを作成
    // - プロパティ名 name  string型
    private static string $name;

    // - 静的メソッドを作成

    // - メソッド名 setName()
    // - 第一引数は string 型
    public static function setName(string $s) {
        // - 引数の値を 静的プロパティ name に代入
        static::$name = $s;
    }

    // - メソッド名 getName()
    // - 引数はなし
    // - 戻り値の型は string
    public static function getName(): string {
        // - 静的プロパティ name の値をreturn
        return static::$name;
    }
}
// 上述で定義したクラスの setName() で値を設定しなさい。    
Klass_6::setName('abc');
// その次に、getName() で値を取得して var_dump() で出力しなさい。  
var_dump( Klass_6::getName() );
```

### 実行例

```
string(3) "abc"
```

### 解説

静的なプロパティ/メソッドです。  
利用頻度は少なめですが、とはいえ「普通に出てくる」技術なので、しっかりかけるようにしましょう。  
また、プロパティへのアクセスが、通常の `$this->プロパティ名` と、`$` の付く位置が違ったりするので、そのあたりも覚えるか、慣れるか、ググって調べられるようにしておきましょう。  

## インスタンスのcopy

### サンプル回答

```
<?php
declare(strict_types=1);

// - クラス名は Klass_7
class Klass_7 {
    // - プロパティを作成
    // - プロパティ名 num  int型  デフォルト値 10 アクセス権 public
    public int $num = 10;
    // - プロパティ名 name  string型  デフォルト値 "name string"  アクセス権 public
    public string $name = 'name string';
}

// 上述で定義したクラスのインスタンス(オブジェクト)を、変数 obj で作成しなさい。  
$obj = new Klass_7();

// 次に、変数 obj2 に、上述の obj を正しく複製しなさい。この複製は「同じ値を持つ、別のインスタンスを作成する」ものとします。  
$obj2 = clone $obj;

// 次に、obj のプロパティ num と name の値を変更しなさい。  
$obj->num = 123;
$obj->name = 'hoge';

// 最後に、obj と obj2 をvar_dump() して、「objに対しておこなった変更が obj2 に反映されていないこと」を確認しなさい。  
var_dump($obj, $obj2);
```

### 実行例

```
object(Klass_7)#1 (2) {
  ["num"]=>
  int(123)
  ["name"]=>
  string(4) "hoge"
}
object(Klass_7)#2 (2) {
  ["num"]=>
  int(10)
  ["name"]=>
  string(11) "name string"
}
```

### 解説

インスタンスの複製に関する問題です。  
利用頻度はそれほど高くないのですが、これを知らず `$obj2 = $obj;` とやってしまうと「期待している動作と全く異なる動作」になってしまうので、注意が必要です。  
また、問題では触れていませんが、インスタンスの複製には「シャローコピー(Shallow Copy) / 浅いコピー」「ディープコピー(Deep Copy) / 深いコピー」にまつわる問題が、言語によらず、出てきます。  
このあたりも一度、ググって調べてみるとよいでしょう。  
