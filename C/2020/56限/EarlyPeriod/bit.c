//   bit.c
//   cl  bit.c
#include <stdio.h>

int main() {
    //
    int  i, j, k;
    i = 1; j = 1; k = i & j;
    printf("%d and %d = %d \n", i, j, k);
    //
    i = 1; j = 0; k = i & j;
    printf("%d and %d = %d \n", i, j, k);
    //
    i = 10; j = 6; k = i & j;
    printf("%d and %d = %d \n", i, j, k);

    //
    i = 1; j = 1; k = i | j;
    printf("%d or %d = %d \n", i, j, k);
    //
    i = 10; j = 6; k = i | j;
    printf("%d or %d = %d \n", i, j, k);

    //
    i = 15; j = i >> 1;
    printf("%d >>1 = %d \n", i, j);
    i = -10; j = i >> 1;
    printf("%d >>1 = %d \n", i, j);


    return 0;
}






