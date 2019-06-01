// for6.c
#include <stdio.h>

int main(void) {
  //
  for(int i = 0; i < 10; i++) {
    printf(" %d: ", i);
    // 「iの二乗」の数だけ * を出力する
    for(int j = 0; j < (i * i); j++) {
      printf("*");
    }
    // 最後の改行
    printf("\n");
  }

  return 0;
}
