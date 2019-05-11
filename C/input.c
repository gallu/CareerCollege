// input.c
#include <stdio.h>
#include <stdlib.h>

// 定数
#define BUFFER_SIZE 256

void get_line(char *buffer, int size) {
  // エラー or 1 文字も読み込んでいない
  if (NULL == fgets(buffer, size, stdin)) {
    buffer[0] = '\0';
    return; // 早期リターン
  }

  // 「最後の改行」を削除する
  for(int i = 0; i < size; i ++) {
    //printf("%d :%c:\n", i, buffer[i]);
    // 改行文字なら
    if ('\n' == buffer[i]) {
      // 終端文字(\0)に書き換える
      buffer[i] = '\0';
      return ;
    }
  }

  //
  return ;
}

int main(void) {
  //
  char buffer[BUFFER_SIZE];

  printf("1st num: ");
  get_line(buffer, BUFFER_SIZE);
  int i = atoi(buffer);
  //printf("input is : %d\n", i);
  printf("2nd num: ");
  get_line(buffer, BUFFER_SIZE);
  int j = atoi(buffer);

  printf("%d + %d = %d\n", i, j, i + j);


  return 0;
}




