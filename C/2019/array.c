// array.c
#include <stdio.h>

int main(void) {
  // 配列の準備
  int box[5];
  // データを入れる
  box[0] = 4;
  box[1] = 2;
  box[2] = 1;
  box[3] = 5;
  box[4] = 3;
  //
  printf("0番目は%d\n", box[0]);
  printf("1番目は%d\n", box[1]);
  printf("2番目は%d\n", box[2]);
  printf("3番目は%d\n", box[3]);
  printf("4番目は%d\n", box[4]);

  return 0;
}
