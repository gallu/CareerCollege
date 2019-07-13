// file3.c
#include <stdio.h>

int main(void) {
  char *filename = "file.txt";

  FILE *fp = fopen(filename, "r");
  if (fp == NULL) {
    printf("ファイル %s は存在しません\n", filename);
    return -1;
  }
  //
  printf("ファイル %s をopenしました。\n", filename);

  // 読み込み
  char buf[10];
  fread(buf, 1, 9, fp);
  buf[9] = '\0';
  printf("%s\n", buf);

  //
  fclose(fp);
  //
  return 0;
}



