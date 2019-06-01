// switch2.c
// cl  switch.c  get_line.c
#include <stdio.h>
#include <stdlib.h>
#include "get_line.h"

// 定数
#define BUFFER_SIZE 128

int main(void) {
  // 入力を促す
  printf("あなたの好きな飲み物は？\n");
  printf("a. コーヒー\n");
  printf("b. ミルクティ\n");
  printf("c. どちらでもない\n");

  char buffer[BUFFER_SIZE];
  get_line(buffer, BUFFER_SIZE);
  char c = buffer[0];
  //char c = getchar();
//printf("==> %c\n", c);
//return 0;

  // 入力値を判定する
  switch(c) {
    case 'A': // FALL THROUGH
    case 'a':
      printf("あなたが選んだのは コーヒー です\n");
      break;

    case 'B': // FALL THROUGH
    case 'b':
      printf("あなたが選んだのは ミルクティ です\n");
      break;

    default:
      printf("あなたが選んだのは その他 です\n");
      break;
  }

  return 0;
}

