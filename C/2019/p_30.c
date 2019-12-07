// p_30.c
#include <stdio.h>

void hoge(void) {
  printf("hoge\n");
}
void foo(void) {
  printf("foo\n");
}

int main(void) {
  //
  printf("%p\n", hoge);
  printf("%p\n", foo);

  return 0;
}
