// p_29.c
#include <stdio.h>

char * hoge(int i) {
  char *s_array[] = {"1st", "2nd", "3rd"};
  printf("%p\n", s_array);
  return s_array[i];
}

int main(void) {
  char *s = hoge(1);
  printf("%p: %s\n", s, s);
  s = hoge(1);
  s = hoge(1);

  return 0;
}
