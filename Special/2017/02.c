#include <stdio.h>

void non_ref(int i) {
  printf("non_ref: %016x\n", &i);
  printf("       : %d\n", i); // 値を使うとき
}

void ref(int *pi) {
  printf("ref:     %016x\n", pi);
  printf("   :     %d\n", *pi); // 値を使うとき
}

int main() {
  //
  int i = 10;
  //
  printf("base:    %016x\n", &i);
  printf("    :    %d\n", i);
  //
  non_ref(i);
  ref(&i);

  //
  return 0;
}
