// array3.c
#include <stdio.h>

#define ARRAY_SIZE 5

int main(void) {
  // 配列の準備 + データを入れる
  int box[ARRAY_SIZE] = {4, 2, 1, 5, 3};
  //
  for(int i = 0; i < ARRAY_SIZE; i++) {
    printf("%d番目は%d\n", i, box[i]);
  }

  return 0;
}
