// while3.c
#include <stdio.h>

int main(void) {
  int c; // char‚Å‚Í‚È‚­int
  while((c = getchar()) != EOF) {
    putchar(c);
  }
  // ÅŒã‚É‰üs‚P‚ÂB
  printf("\n");

  return 0;
}
