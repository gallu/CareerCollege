// array6.c
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define ARRAY_SIZE 5 /* 1人あたりのテストの種類 */
#define NUMBER 4 /* 人数 */

int main(void) {
  // 二次元配列の用意
  int box[ NUMBER ][ ARRAY_SIZE ];

  // 乱数のシードを設定
  srand((unsigned)time(NULL));
  // 人数分、loop
  int total;
  for(int num = 0; num < NUMBER; num ++) {
    //
    total = 0;

    for(int i = 0; i < ARRAY_SIZE; i ++) {
      // 乱数を発生させて配列に格納する
      box[num][i] = rand() % 101; // 0-100
      // 平均点を算出するための合計値
      total += box[num][i];
      // 出力
      printf("%d is %d\n", i, box[num][i]);
    }
    // 平均の出力
    printf("%d: average %.2f\n\n", num, (double)total / ARRAY_SIZE);
  }

  return 0;
}
