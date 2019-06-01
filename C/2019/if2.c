// if2.c
#include <stdio.h>
#include <string.h>
#include "get_line.h"

// ’è”
#define BUFFER_SIZE 256

int main(void) {
  // •¶š‚ğæ“¾
  char buffer[BUFFER_SIZE];
  printf("•¶š: ");
  get_line(buffer, BUFFER_SIZE);

  // ”äŠr—p‚Ì•¶š‚ğì¬
  char s[] = "abc";

  // “ü—Í‚Æ”äŠr
  //if (buffer == s) {
  if (strcmp(buffer, s) == 0) {
    printf("%s ‚Æ %s‚È‚Ì‚ÅA“¯‚¶•¶š—ñ‚Å‚·\n", buffer, s);
  } else {
    printf("%s ‚Æ %s‚È‚Ì‚ÅAˆá‚¤•¶š—ñ‚Å‚·\n", buffer, s);
    printf("%p \t %p \n", buffer, s);
  }

  return 0;
}






