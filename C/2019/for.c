// for.c
#include <stdio.h>

int main(void) {
  // 100回、繰り返し処理をする
  for(int i = 0; i < 100; i++) {
    printf("%d\n", i);
  }
  //
  //printf("カウンタは %d です\n",i); // for.c(10): error C2065: 'i': 定義されていない識別子です。

  // こっちでもよい(仕様書の記述次第)
  for(int i = 1; i <= 100; i++) {
    printf("%d\n", i);
  }

  // 「１から１００までの総和」の計算
  int total = 0;
  for(int i = 1; i <= 100; i++) {
    total += i;
  }
  printf("1から100までの総和は %d です..\n", total);

  return 0;
}

