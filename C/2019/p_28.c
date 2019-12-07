// p_28.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void ex_free(void **pp) {
  free(*pp);
  (*pp) = NULL;
}

int main(void) {
  //
  int *pi;
  pi = malloc(5 * sizeof(int));
  printf("%p\n", pi);
  ex_free((void **)&pi);
  printf("%p\n", pi);

  //
  char *pc;
  pc = malloc(50 * sizeof(char));
  printf("%p\n", pc);
  ex_free((void **)&pc);
  printf("%p\n", pc);


  return 0;
}
