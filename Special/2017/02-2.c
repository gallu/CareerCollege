#include <stdio.h>

int main() {
  int i = 10;
  int *pi = &i;

  printf("%d\n", i);
  printf("%d\n", *pi);
  printf("%x\n", &i);
  printf("%x\n", pi);

  return 0;
}

