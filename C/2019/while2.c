// while2.c
#include <stdio.h>

int main(void) {
  char c;
  /*
  c = getchar();
  while(c != '.') {
    printf("%c\n", c);
    c = getchar();
  }
  */
  //
  while((c = getchar()) != '.') {
    printf("%c\n", c);
  }

  return 0;
}
