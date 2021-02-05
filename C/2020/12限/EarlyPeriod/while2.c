//  while2.c
//  cl  while2.c
#include <stdio.h>

int main() {
    int i = 0;
    do {
        printf("%d \n", i);
    } while(i ++ < 10);

    do {
        printf("false do-while\n");
    } while(0);

    return 0;
}
