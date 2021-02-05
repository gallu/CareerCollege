//  comp.c
//  cl  comp.c
#include <stdio.h>

int main() {
    //
    if (1) {
        printf("1 is true\n");
    }
    if (0) {
        printf("0 is true\n");
    }
    if (-1) {
        printf("-1 is true\n");
    }
    //
    int i = 0;
    printf("1 == 1 is %d \n", 1 == 1);
    printf("1 == 2 is %d \n", 1 == 2);
    printf("1 < 2 is %d \n", 1 < 2);
    printf("1 > 2 is %d \n", 1 > 2);
    printf("i = 20 is %d \n", i = 20);

    return 0;
}
