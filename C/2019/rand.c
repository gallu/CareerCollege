// rand.c
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(void) {
  //
  int r;
  // —”‚ÌƒV[ƒh‚ğİ’è
  srand((unsigned)time(NULL));

  // —”‚ğì‚é
  r = rand() % 101; // 0-100
  printf("rand is %d\n", r);

  return 0;
}
