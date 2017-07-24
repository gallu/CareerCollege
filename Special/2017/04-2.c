#include <stdio.h>
#include <stdlib.h>
#include <time.h>

void hoge(void) {
  printf("into hoge\n");
}

void foo(void) {
  printf("into foo\n");
}

int main() {
  //
  void (*pfunc)(void);

  //
  srand((unsigned)time(NULL));
  if (0 == (rand() % 2)) {
    pfunc = hoge;
  } else {
    pfunc = foo;
  }

  //
  (*pfunc)();

  //
  return 0;
}

