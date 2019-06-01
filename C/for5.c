// for5.c
#include <stdio.h>

int main(void) {
  //
  for(int i = 0; i < 10; i++) {
    printf(" %d: ", i);
    // i‚Ì”‚¾‚¯ * ‚ðo—Í‚·‚é
    for(int j = 0; j < i; j++) {
      printf("*");
    }
    // ÅŒã‚Ì‰üs
    printf("\n");
  }

  return 0;
}
