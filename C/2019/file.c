// file.c
#include <stdio.h>

int main(void) {
  //char *filename = "hoge.hoge";
  char *filename = "file.c";

  FILE *fp = fopen(filename, "r");
  if (fp == NULL) {
    printf("ファイル %s は存在しません\n", filename);
    return -1;
  }
  //
  printf("ファイル %s をopenしました。\n", filename);

  //
  fclose(fp);
  //
  return 0;
}
