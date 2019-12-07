// p_31.c
#include <stdio.h>

void hoge(void) {
  printf("hoge\n");
}

int main(void) {
  //
  void (*func)(void);
  func = hoge;
  (*func)();

  return 0;
}
