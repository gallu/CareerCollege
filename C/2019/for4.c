// for4.c
#include <stdio.h>

int main(void) {
  //
  for(int i = 0; i < 10; i ++) {
    printf("%d‚Ì", i);
    printf("“ñæ‚Í%d‚ÅA", i * i);
    printf("ŽOæ‚Í%d‚Å‚·\n", i * i * i);
  }

  return 0;
}
