// file4.c
#include <stdio.h>

int main(void) {
  char *filename = "file2.txt";

  //FILE *fp = fopen(filename, "w"); // 上書き
  FILE *fp = fopen(filename, "a"); // 追加
  if (fp == NULL) {
    printf("ファイル %s は存在しません\n", filename);
    return -1;
  }
  //
  printf("ファイル %s をopenしました。\n", filename);

  // "abc"を書き込む( fputsもあるよ )
  fprintf(fp, "abc %d\n", 10);
  fprintf(fp, "def %d\n", 20);

  //
  fclose(fp);
  //
  return 0;
}


