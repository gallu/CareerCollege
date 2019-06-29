// array4.c
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define ARRAY_SIZE 5

int main(void) {
  // 配列を定義する
  int box[ ARRAY_SIZE ];

  // 乱数のシードを設定
  srand((unsigned)time(NULL));
  // 乱数を発生させて配列に格納する
  for(int i = 0; i < ARRAY_SIZE; i ++) {
    box[i] = rand() % 101; // 0-100
  }

  // 平均点を算出する
  int total = 0;
  for(int i = 0; i < ARRAY_SIZE; i ++) {
    total += box[i];
  }

  // 出力
  for(int i = 0; i < ARRAY_SIZE; i ++) {
    printf("%d is %d\n", i, box[i]);
  }
  printf("average %.2f\n", (double)total / ARRAY_SIZE);

  return 0;
}
