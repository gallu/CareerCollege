//  if2.c
//  cl  if2.c
#include <stdio.h>

int main() {
    int i = 10;
    //
    if (i == 10) {
        printf("i is 10 \n");
    } else {
        printf("i is NOT 10 \n");
    }
    printf("i is %d \n", i);

    // /W4 を付けると warning が出る
    if (i = 20) {
        printf("i is 20 ...? \n");
    } else {
        printf("i is NOT 20 \n");
    }
    printf("i is %d \n", i);


    return 0;
}
