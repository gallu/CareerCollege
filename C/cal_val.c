//  cal_val.c
#include <stdio.h>

int main(void) {
  int i = 55;
  int j = 88;
  int k;
  //
  k = i + j;
  printf("%d + %d = %d \n", i, j, k);
  printf("1234567890\n");
  printf("%d \n", k);
  printf("%4d \n", k);
  printf("%04d \n", k);
  printf("%8d \n", k);
  printf("%08d \n", k);

  //
  double d = 1.2345678;
  printf("%f\n", d);
  printf("%.2f\n", d);
  printf("%.4f\n", d);
  printf("%.28f\n", d);


  return 0;
}

