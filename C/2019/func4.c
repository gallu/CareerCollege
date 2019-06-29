// func4.c
// cl  func4.c  add.c  sub.c
#include <stdio.h>
#include "add_sub.h"

//
int main(void) {
  //
  int i;
  i = add(10, 20);
  printf("add is %d\n", i);
  i = sub(10, 20);
  printf("sub is %d\n", i);

  return 0;
}
