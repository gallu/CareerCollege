#include <stdio.h>

int main() {
  //
  int ar_i[10];
  char ar_c[10];
  int i;

  //
  printf("ar_i: base: %016x\n", ar_i);
  for(i=0; i < 10; ++i) {
    printf("         %d: %016x\n", i, &ar_i[i]);
  }
  //
  printf("ar_c: base: %016x\n", ar_i);
  for(i=0; i < 10; ++i) {
    printf("         %d: %016x\n", i, &ar_c[i]);
  }

  //
  return 0;
}
