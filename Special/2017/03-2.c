#include <stdio.h>

int main() {
  //
  int ar_i[10];
  char ar_c[10];
  int* pi  = ar_i;
  char* pc = ar_c;
  int i;

  //
  printf("ar_i: base: %016x\n", pi);
  for(i=0; i < 10; ++i) {
    printf("         %d: %016x\n", i, pi);
    pi ++;
  }
  //
  printf("ar_c: base: %016x\n", pc);
  for(i=0; i < 10; ++i) {
    printf("         %d: %016x\n", i, pc);
    pc ++;
  }

  //
  return 0;
}
