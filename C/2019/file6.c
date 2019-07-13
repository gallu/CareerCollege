// file6.c
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
  char buf[10];
  while(fgets(buf, 10, fp) != NULL) {
    printf("%s\n", buf);

  }

  //
  fclose(fp);
  //
  return 0;
}



