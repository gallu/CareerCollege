//   comp.c
//   cl  comp.c
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
    int i = 10;
    printf("i == 10 is %d\n", i == 10);
    printf("i == 15 is %d\n", i == 15);
    printf("i = 15 is %d\n", i = 15);


    return 0;
}
