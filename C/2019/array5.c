// array5.c
#include <stdio.h>

#define ARRAY_SIZE 6

int main(void) {
  //
  //char box[ ARRAY_SIZE ] = {'H', 'e', 'l', 'l', 'o', '\0'};
  char box[ ARRAY_SIZE ] = "Hello";

  for(int i = 0; i < ARRAY_SIZE; i++) {
    printf("%c\n", box[i]);
  }
  printf("%s\n", box);

}
