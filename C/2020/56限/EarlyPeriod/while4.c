//  while4.c
//  cl  while4.c  get_line.c
#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include "get_line.h"

#define BUFFER 128

int main() {
    // set seed
    srand((unsigned long)time(NULL));
    int i = rand() % 100;
    //printf("%d \n", i);
    //
    char s[BUFFER];
    int input;
    do {
      get_line(s, BUFFER);
      input = atoi(s);
      //printf("%d \n", input);
      //
      if (i > input) {
          printf("i > input\n");
      }
      if (i < input) {
          printf("i < input\n");
      }
    } while(i != input);
    //
    printf("Success!!\n");

    return 0;
}
