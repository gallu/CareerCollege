// p_32.c
#include <stdio.h>

void f1(int i) {
  printf("f1: %d\n", i);
}
void f2(int i, int j) {
  printf("f2: %d\n", i * j);
}
int f3(int i, int j) {
  return i + j;
}

int main(void) {
  void (*fp_1)(int);
  fp_1 = f1;
  (*fp_1)(10);
  //
  void (*fp_2)(int, int);
  fp_2 = f2;
  (*fp_2)(10, 10);
  //
  int (*fp_3)(int, int);
  fp_3 = f3;
  int i = (*fp_3)(10, 10);
  printf("fp_3: %d\n", i);

  return 0;
}





