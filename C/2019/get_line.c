// get_line.c
#include <stdio.h>
#include "get_line.h"

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

