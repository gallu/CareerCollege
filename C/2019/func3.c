// func3.c
// cl  func3.c
#include <stdio.h>

// 定義
int func1(int i, int j);

//実装
int func1(int i, int j) {
    return i + j;
}
//
int main(void) {
  //
  int i;
  i = func1(1, 2);
  //i = func1(1); // error C2198: 'func1': 呼び出しに対する引数が少なすぎます。
  //i = func1(1, 2, 3); // warning C4020: 'func1': 実引数が多すぎます。
  //i = func1("1", 2); // warning C4047: '関数': 間接参照のレベルが 'int' と 'char [2]' で異なっています。 // warning C4024: 'func1': の型が 1 の仮引数および実引数と異なります。
  i = func1(1.234, 2); // エラーは出ない(キャストはされる)
  i = func1('A', 2); // エラーは出ない(アスキーコードで計算される)

  printf("%d\n", i);
  printf("%c\n", 65);

  return 0;
}
