#include <stdio.h>
#include <stdlib.h>

int main() {
  //
  int ai[10];
  int i, j;
  unsigned char *pc;

  //
  for(i = 0; i < 10; i ++) {
    ai[i] = 0xff00 + i;
  }
  //
  printf("int\n");
  for(i = 0; i < 10; i ++) {
    printf("%08x", ai[i]);
    printf("\n");
  }
  printf("\n");

  //
  printf("char \n");
  pc = (unsigned char *)ai;
  for(i = 0; i < 10; i ++) {
    for(j = 0; j < 4; j ++) {
      printf("%02x", *pc ++);
    }
    printf("\n");
  }

  //
  return 0;
}
