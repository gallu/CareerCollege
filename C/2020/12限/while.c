//  while.c
//  cl  while.c
#include <stdio.h>

int main() {
    int i = 0;
    while(i < 10) {
        printf("%d \n", i);
        i ++;
    }

    while(0) {
        printf("false while\n");
    }

    return 0;
}
