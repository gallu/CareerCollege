#include <stdio.h>

int main() {
  //
  int i;
  int *pi = &i;
  char c;
  char *pc = &c;
  //
  printf("int: %016x\n", pi);
  printf("char: %016x\n", pc);

  //
  return 0;
}
