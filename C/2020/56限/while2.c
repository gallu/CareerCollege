//  while2.c
//  cl  while2.c
#include <stdio.h>

int main() {
    int i = 0;
    do {
        printf("%d \n", i);
        i ++;
    } while(i < 10);

    do {
        printf("do-while 0\n");
    } while(0);

    return 0;
}
