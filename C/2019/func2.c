// func2.c
#include <stdio.h>

void print_graph(int x) {
  for(int i = 0; i < x; i ++) {
    putchar('*');
  }
  printf("\n");
}

int main(void) {
  //
  print_graph(10);
  return 0;
}
