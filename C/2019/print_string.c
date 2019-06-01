//  print_string.c
#include <stdio.h>

int main(void) {
  char c = 'a';
  char *s = "hello";
  //
  printf("c is %c \n", c);
  printf("s is %s \n", s);
  printf("s is %10s \n", s);

  //printf("%\n");
  printf("%% \n");
  printf("%c \n", '%');
  printf("%s \n", "%");


  return 0;
}
