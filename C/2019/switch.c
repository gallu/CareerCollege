// switch.c
// cl  switch.c  get_line.c
#include <stdio.h>
#include <stdlib.h>
#include "get_line.h"

// 定数
#define BUFFER_SIZE 128

int main(void) {
  // 入力を促す
  printf("あなたの好きな飲み物は？\n");
  printf("1. コーヒー\n");
  printf("2. ミルクティ\n");
  printf("3. どちらでもない\n");

  char buffer[BUFFER_SIZE];
  get_line(buffer, BUFFER_SIZE);
  int n = atoi(buffer);
//printf("==> %d\n", n);

  // 入力値を判定する
  /*
  if (n == 1) {
    printf("あなたが選んだのは コーヒー です\n");
  } else if (n == 2) {
    printf("あなたが選んだのは ミルクティ です\n");
  } else {
    printf("あなたが選んだのは その他 です\n");
  }
  */
  switch(n) {
    case 1:
      printf("あなたが選んだのは コーヒー です\n");
      break;

    case 2:
      printf("あなたが選んだのは ミルクティ です\n");
      break;

    default:
      printf("あなたが選んだのは その他 です\n");
      break;
  }

  return 0;
}

