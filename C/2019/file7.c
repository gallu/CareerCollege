// file7.c
#include <stdio.h>

int main(void) {
  char *filename = "file2.txt";

  FILE *fp = fopen(filename, "r");
  if (fp == NULL) {
    printf("ファイル %s は存在しません\n", filename);
    return -1;
  }
  //
  printf("ファイル %s をopenしました。\n", filename);

  // 読み込み
  int buf;
  while((buf = fgetc(fp)) != EOF) {
    printf("%c", buf);
  }

  //
  fclose(fp);
  //
  return 0;
}



