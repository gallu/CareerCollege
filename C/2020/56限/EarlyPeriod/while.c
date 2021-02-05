//  while.c
//  cl  while.c
#include <stdio.h>

int main() {
    int i = 0;
    while(i < 10) {
        printf("%d \n", i);
        i ++;
        //printf("%d \n", i ++);
    }

    while(0) {
        printf("while 0\n");
    }

    return 0;
}
