// cal.c
#include <stdio.h>

int main(void) {
  printf("add is %d \n"  , 1 + 1);
  printf("sub is %d \n"  , 1 - 1);
  printf("times is %d \n", 1 * 1);
  printf("div is %d \n"  , 9 / 5);
  printf("div is %f \n"  , (double)9 / 5);
  printf("--------------\n");
  printf("%d\n", 1 + (2 * 3) + (4 * 5));
  return 0;
}
