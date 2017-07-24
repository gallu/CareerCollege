#include <stdio.h>

int main() {
  //
  int i = 10;
  int *pi = &i;
  int **ppi = &pi;
  int ***pppi = &ppi;

  //
  printf("0x%08x -> 0x%08x -> 0x%08x -> %d\n", pppi, ppi, pi, i);
  //
  *pi = 20;
  printf("0x%08x -> 0x%08x -> 0x%08x -> %d\n", pppi, ppi, pi, i);
  //
  **ppi = 30;
  printf("0x%08x -> 0x%08x -> 0x%08x -> %d\n", pppi, ppi, pi, i);
  //
  ***pppi = 40;
  printf("0x%08x -> 0x%08x -> 0x%08x -> %d\n", pppi, ppi, pi, i);

  //
  return 0;
}
