// file2.c
#include <stdio.h>

int main(void) {
  char *filename = "file.txt";

  //FILE *fp = fopen(filename, "w"); // 上書き
  FILE *fp = fopen(filename, "a"); // 追加
  if (fp == NULL) {
    printf("ファイル %s は存在しません\n", filename);
    return -1;
  }
  //
  printf("ファイル %s をopenしました。\n", filename);

  // "abc"を書き込む
  fwrite("abc\n", 1, 4, fp);

  //
  fclose(fp);
  //
  return 0;
}


