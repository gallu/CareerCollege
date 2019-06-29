// func1.c
#include <stdio.h>

// ŠÖ”éŒ¾
int add(int a, int b);
int sub(int a, int b);

// ŠÖ”À‘•F‘«‚µZ‚·‚éŠÖ”
int add(int a, int b) {
    return a + b;
}
// ŠÖ”À‘•Fˆø‚«Z‚·‚éŠÖ”
int sub(int a, int b) {
    return a - b;
}
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
