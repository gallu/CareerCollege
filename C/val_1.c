//  val_1.c
#include <stdio.h>

int main(void) {
  int i = 123;
  printf("i is %d \n", i);

  double d = 1.23456;
  printf("d is %f \n", d);

  char c = 'A';
  printf("c is %c \n", c);

  char *s = "hello";
  printf("c is %s \n", s);
  char ss[] = "hello";
  printf("c is %s \n", ss);


  return 0;
}

