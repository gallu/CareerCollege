// for3.c
#include <stdio.h>

int main(void) {
  //
  for(int i = 1; i <= 9; i++) {
    for(int j = 1; j <= 9; j++) {
      printf("%d * %d = %2d\n", i, j, i * j);
    }
    printf("\n");
  }

  return 0;
}
