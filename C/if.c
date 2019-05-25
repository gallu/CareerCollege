// if.c
#include <stdio.h>
#include <stdlib.h>
#include "get_line.h"

// 定数
#define BUFFER_SIZE 256

int main(void) {

  // 降水確率を取得
  char buffer[BUFFER_SIZE];
  printf("降水確率: ");
  get_line(buffer, BUFFER_SIZE);
  int n = atoi(buffer);
//printf("%d\n", n);

  // エラーチェック(validation)
  // 降水確率が100を超えてたり0未満だったらエラー
  if ( (n > 100) || (n < 0) ) {
    printf("降水確率は0～100の間で入力してください\n");
    return -1;
  }

  // もし、降水確率が50%以上なら
  if (n >= 50) {
    // 傘を持っていく
    printf("傘を持っていく\n");
  } else if (n >= 20) {
    // もし、(降水確率が50%以上ではなく、)降水確率が20%以上なら
    printf("折りたたみ傘を持っていこう\n");
  } else {
    printf("傘はいらない\n");
  }

  return 0;
}









